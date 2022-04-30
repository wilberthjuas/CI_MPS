<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Visor_Model extends CI_Model {

    public function getData(){
        $this->load->database();
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

}
  