<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		session_start();
		$data['title'] = "REGISTRO DE NUEVO PAGO";
        $data['url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('registro');
		$this->load->view('footer');
	}

	public function sendForm()
	{
		$this->load->model('Registro_Model');
		$searchTerm = $_POST['buscar'];
		$resultado =$this->Registro_Model->getData($searchTerm);
		$this->load->helper('url');
		session_start();
		$data['title'] = "REGISTRO DE NUEVO PAGO";
        $data['url'] = base_url();
		$data['result1'] = $resultado;
		$this->load->view('header',$data);
		$this->load->view('datos',$data);
		$this->load->view('footer');
	}

	public function pagos()
	{
		$this->load->helper('url');
		session_start();
		$this->load->model('Registro_Model');
		$datos['pag']=$_POST['pag'];//Pago
		$datos['fol']=$_POST['fol'];//Folio
		$datos['cob']=$_POST['cob'];//Cobro	
		$datos['folio']=$_POST['folio'];//Poliza
		$datos['mon']=$_POST['mon'];//Monto
		$datos['fec']=date("Y-m-d");//Fecha Actual
		$datos['re']=$_POST['re'];//Fecha de Registro
		
		//Pasan los datos al modelo
		$resultFromFetch =$this->Registro_Model->setPago($datos); 

		$resultUpdate = $this->Registro_Model->defineUpdate($datos,$resultFromFetch);

		$data['title'] = "REGISTRO DE NUEVO PAGO";
        $data['url'] = base_url();
		$this->load->view('header',$data);
		if($resultUpdate){
			$this->load->view('correcto');
		}else{
			$this->load->view('incorrecto');
		}
		$this->load->view('footer');
	}
}
