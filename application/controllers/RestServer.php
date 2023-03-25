<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';

class RestServer extends RestController  {


    public function pagos_get(){
        $query = $this->db->query("SELECT *,(SELECT Nombre FROM cobradores WHERE cobradores.id = (SELECT cobrador FROM cctapm WHERE pagos_transaccion.cobrador = cctapm.id_user)) AS cobrador_name FROM pagos_transaccion WHERE estatus != \"PAGADO\" and estatus != \"RECHAZADO\"");
        $this->response(  $query->result_array(), 200 );
    }
    
    public function cobradores_get(){
        $query = $this->db->query("SELECT * FROM cobradores");
        $this->response(  $query->result_array(), 200 );
    }

    public function usuarios_get(){
        $query = $this->db->query("SELECT * FROM cctapm");
        $this->response(  $query->result_array(), 200 );
    }

    public function pagosall_get(){
        $query = $this->db->query("SELECT *,(SELECT Nombre FROM cobradores WHERE cobradores.id = (SELECT cobrador FROM cctapm WHERE pagos_transaccion.cobrador = cctapm.id_user)) AS cobrador_name FROM pagos_transaccion ");
        $this->response(  $query->result_array(), 200 );
    }

    public function updatestatusrechazado_post(){
        $id = $this->post('id');
        if($id != null){
            $data = array(
                'estatus' => 'RECHAZADO',
            );
            $this->db->where('id_payment', $this->post('id'));
            $result = $this->db->update('pagos_transaccion', $data);
        
            $message = array('status' => 'success');
            $this->response($message,200);
        }else{
            $message = array('status' => 'failed');
            $this->response($message,500);
        }
       
    }

    public function updatestatusaceptado_post(){
        $id = $this->post('id');
        if($id != null){
            $data = array(
                'estatus' => 'PAGADO',
            );
            $this->db->where('id_payment', $this->post('id'));
            $result = $this->db->update('pagos_transaccion', $data);
        
            $message = array('status' => 'success');
            $this->response($message,200);
        }else{
            $message = array('status' => 'failed');
            $this->response($message,500);
        }
       
    }





}
?>