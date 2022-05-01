<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CancelarReactivarPoliza extends CI_Controller {
    public function index()
	{
		$this->load->helper('url');
		session_start();
		$data['title'] = "CANCELAR/REACTIVAR PÓLIZA";
        $data['url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('cancelarreactivarpolizas');
		$this->load->view('footer');
	}

    public function setPolizaStatus()
    {
        $this->load->helper('url');
		session_start();
        $folio = $_POST['buscar'];
        $accion = $_POST['accion'];
        $motivo = $_POST['mot'];
        $this->load->model('CancelarReactivarPoliza_Model');
        $this->CancelarReactivarPoliza_Model->setPolizaUpdate($folio,$accion,$motivo);
        $this->load->helper('url');             
		$data['title'] = "GRÚAS";
        $data['url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('correcto',$data);
		$this->load->view('footer');
    }
}