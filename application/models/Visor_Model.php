<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Visor_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getData(){
        $query = $this->db->query("
        SELECT 
            folio, 
            nombre, 
            domicilio, 
            exterior, 
            tel, 
            marca, 
            tipo, 
            placas, 
            serie, 
            ano, 
            expedicion, 
            bit, 
            mot, 
            cobertura, 
            vendedor, 
            municipio, 
            cobrador  
        FROM datos  
        where expedicion ");
        return $query->result_array();
    }


    public function getDataBetweenDates($f1,$f2){
        $this->load->dbutil();
        $query =  $this->db->query("
            SELECT 
                p.id            AS 'FOLIO', 
                p.costo_total   AS 'COSTO', 
                p.pagoinicial   AS '1ER PAGO', 
                v.placas        AS 'PLACAS', 
                p.plazo         AS '11 MENSUALIDADES',
                p.vendedor      AS 'VENDEDOR'
            FROM polizas p INNER JOIN vehiculo v on p.id_vehiculo = v.id 
            WHERE expedicion BETWEEN '$f1' AND '$f2' ");
           
        $delimiter = ",";
        $newline = "\r\n";
        $enclosure = '"';


        return $this->dbutil->csv_from_result($query, $delimiter, $newline, $enclosure);
    }

}
  