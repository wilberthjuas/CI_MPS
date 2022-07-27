<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class CancelarReactivarPoliza_Model extends CI_Model {
    
    public function setPolizaUpdate($folio,$accion,$motivo){
        if($accion=="Cancelar"){
            $this->load->database();
            $query = $this->db->query("UPDATE polizas SET `bit` = '1',`motivo` = '$motivo' WHERE id = '$folio'; ");        
        }
        
        if($accion=="Reactivar"){
            $this->load->database();
            $query = $this->db->query("UPDATE polizas SET `bit` = '0' ,`motivo` = '$motivo' WHERE id = '$folio'; ");
        }

        return $query;
    }

}