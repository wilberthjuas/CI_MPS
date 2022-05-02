<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Gruas_Model extends CI_Model {

    function getData($searchTerm) {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM datos WHERE folio='$searchTerm'");
        return $query->result_array();
      }

     
    function setGrua($com1,$com2,$folio) {
        $this->load->database();
        $query = $this->db->query("UPDATE datos SET com1 = '$com1',com2 = '$com2' WHERE datos.folio = '$folio'");
        return true;
    }
}