<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CancelarReactivarPoliza extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->logged_in();
		$this->load->model('CancelarReactivarPoliza_Model');
	}

	private function logged_in() {
        if(! $this->session->userdata('authenticated')) {
            redirect('login');
        }
    }

    public function index()
	{
		$data['title'] = "CANCELAR/REACTIVAR PÓLIZA";
		$data['name'] = $this->session->userdata('name');
        $data['url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('activarpolizas_form');
		$this->load->view('footer');
	}

    public function setPolizaStatus()
    {
        
        $folio = $_POST['buscar'];
        $accion = $_POST['accion'];
        $motivo = $_POST['mot'];
        
        $this->CancelarReactivarPoliza_Model->setPolizaUpdate($folio,$accion,$motivo);
		$data['title'] = "CANCELAR/REACTIVAR PÓLIZA";
		$data['name'] = $this->session->userdata('name');
        $data['url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('correcto',$data);
		$this->load->view('footer');
    }
}