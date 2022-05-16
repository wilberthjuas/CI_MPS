<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Gruas_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->database();
    }

    public function getData($searchTerm) {
        //$query = $this->db->query("SELECT * FROM datos WHERE folio='$searchTerm'");
        $query = $this->db->query("
            SELECT 
                p.id            AS 'folio',
                c.nombre ,
                c.domicilio ,
                c.exterior ,
                c.colonia ,
                c.municipio ,
                c.telefono,
                v.tipo,
                v.serie,
                v.nmotor,
                v.placas ,
                (SELECT cb.cobertura FROM coberturas cb WHERE cb.id = p.id_cobertura  ) AS 'cobertura',
                p.expedicion,
                p.ano2,
                p.pagomensual ,
                p.vendedor,
                p.cobrador
            FROM polizas p 
            INNER JOIN vehiculo v ON p.id_vehiculo = v.id 
            INNER JOIN cliente c ON c.id = v.id_cliente 
            WHERE p.id ='$searchTerm';
        ");
        return $query->result_array();
      }

    public function getGruas($poliza)
    {
        $query = $this->db->query("SELECT * FROM gruas WHERE id_poliza = $poliza ");
        return $query->result_array();
    }

     
    public function setGrua($com1,$folio) {
        //$query = $this->db->query("UPDATE datos SET com1 = '$com1',com2 = '$com2' WHERE datos.folio = '$folio'");
        $this->db->set('id_poliza', $folio);
        $this->db->set('comentario',$com1);
        $this->db->insert('gruas'); 
        return $this->db->insert_id();
    }
}