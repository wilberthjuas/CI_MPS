<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->logged_in();
		$this->load->model('Registro_Model');
	}

	private function logged_in() {
        if(! $this->session->userdata('authenticated')) {
            redirect('login');
        }
    }

	public function index()
	{
		$data['title'] = "REGISTRO DE NUEVO PAGO";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
		$this->load->view('header',$data);
		$this->load->view('pagos/registro');
		$this->load->view('footer');
	}

	public function sendForm()
	{
		$searchTerm = $_POST['buscar'];
		$data['result1'] = $this->Registro_Model->getData($searchTerm);
		$this->load->model('Cobrador_Model');
		$data['cobradores'] = $this->Cobrador_Model->get_cobradorCRUD();
		$data['title'] = "REGISTRO DE NUEVO PAGO";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
		
		$this->load->view('header',$data);
		$data['result1'] = $this->Registro_Model->getData($searchTerm);
		$this->load->model('Cobrador_Model');
		$data['cobradores'] = $this->Cobrador_Model->get_cobradorCRUD();
		$this->load->model('Tarjeta_Model');
		$data['pagos'] = $this->Tarjeta_Model->getPayments($searchTerm);
		$this->load->view('pagos/datos',$data);
		$this->load->view('footer');
	}

	public function pagos()
	{
		$datos['pag']=$_POST['pag'];//Pago
		$datos['fol']=$_POST['fol'];//Folio
		$datos['cob']=$_POST['cob'];//Cobro	
		$datos['folio']=$_POST['folio'];//Poliza
		$datos['mon']=$_POST['mon'];//Monto
		$datos['fec']=date("Y-m-d");//Fecha Actual
		$datos['re']=$_POST['re'];//Fecha de Registro
		 

		$resultUpdate = $this->Registro_Model->defineUpdate($datos);

		$data['title'] = "REGISTRO DE NUEVO PAGO";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
		$this->load->view('header',$data);
		if($resultUpdate){
			$this->load->view('correcto');
		}else{
			$this->load->view('incorrecto');
		}
		$this->load->view('footer');
	}
}
