<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class CancelarReactivarPoliza_Model extends CI_Model {
    
    public function setPolizaUpdate($folio,$accion,$motivo){
        if($accion=="Cancelar"){
            $this->load->database();
            $query = $this->db->query("UPDATE `mutua402_mps`.`datos` SET `bit` = '1',`mot` = '$motivo' WHERE `datos`.`folio` = '$folio'; ");        
        }
        
        if($accion=="Reactivar"){
            $this->load->database();
            $query = $this->db->query("UPDATE `mutua402_mps`.`datos` SET `bit` = '0' ,`mot` = '$motivo' WHERE `datos`.`folio` = '$folio'; ");
        }

        return $query;
    }

}