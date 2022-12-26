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
            p.id  AS 'folio',
            c.nombre ,
            c.domicilio ,
            c.exterior ,
            c.telefono,
            c.municipio ,
            v.marca ,
            v.tipo,
            v.placas ,
            v.serie,
            v.ano ,
            v.nmotor,
            p.expedicion,
            p.bit,
            p.motivo,
            (SELECT cb.cobertura FROM coberturas cb WHERE cb.id = p.id_cobertura  ) AS 'cobertura',
            p.vendedor,
            p.vigencia,
            p.cobrador
        FROM polizas p 
        INNER JOIN vehiculo v ON p.id_vehiculo = v.id 
        INNER JOIN cliente c ON c.id = v.id_cliente ");
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

    public function getImpresion($a,$b) {
        $query = "
            SELECT 
                p.id  AS 'folio',
                c.nombre ,
                c.domicilio ,
                c.exterior ,
                c.colonia ,
                c.municipio ,
                c.telefono,
                c.cp,
                v.tipo,
                v.serie,
                v.nmotor,
                v.placas ,
                v.marca ,
                v.ano ,
                v.color ,
                v.version,
                v.ocupantes,
                (SELECT cb.cobertura FROM coberturas cb WHERE cb.id = p.id_cobertura  ) AS 'cobertura',
                p.expedicion,
                p.vigencia,
                p.pagomensual ,
                p.vendedor,
                p.plazo ,
                p.pagoinicial,
                p.plataforma
            FROM polizas p 
            INNER JOIN vehiculo v ON p.id_vehiculo = v.id 
            INNER JOIN cliente c ON c.id = v.id_cliente ";



        if($b=="Folio"){
            $query = $query." WHERE p.id ='$a' ";
        }
        elseif ($b=="Placas") {
            $query = $query." WHERE v.placas='$a' ";
        }
        elseif ($b=="Nombre"){
            $query = $query." WHERE c.nombre='$a' ";
        }
    
        $queryExecute = $this->db->query($query);
        return $queryExecute->result_array();
      }

}
  