<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarjeta extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->logged_in();
		$this->load->model('Tarjeta_Model');
	}

	private function logged_in() {
        if(! $this->session->userdata('authenticated')) {
            redirect('login');
        }
    }


    public function index()
	{	
		$data['title'] = "INFORMACIÓN DE TARJETA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
		$this->load->view('header',$data);
		$this->load->view('tarjeta/tarjeta');
		$this->load->view('footer');
	}


    public function sendForm()
	{
        $a = $_POST['buscar'];
        $b = $_POST['tipo'];
		$resultado =$this->Tarjeta_Model->getData($a,$b);
		$data['title'] = "INFORMACIÓN DE TARJETA";
        $data['url'] = base_url();
		$data['result1'] = $resultado;
		$data['pagos'] = $this->Tarjeta_Model->getPayments($resultado[0]['folio']);
		$data['name'] = $this->session->userdata('name');
		$this->load->view('header',$data);
		$this->load->view('tarjeta/tarjetaResultados',$data);
		$this->load->view('footer');
	}

    public function updateTable(){
        
        $folio=$_POST['id'];
		$fech =$_POST['fecha'];
		$monto=$_POST['monto'];

		for($i=0;$i<count($folio);$i++){
			$resultado =$this->Tarjeta_Model->updateCard($folio[$i],$fech[$i],$monto[$i]);		
		}
	
		$data['title'] = "ACTUALIZACIÓN TARJETA";
        $data['url'] = base_url();
		$data['result1'] = $resultado;
		$data['name'] = $this->session->userdata('name');
		$this->load->view('header',$data);
		$this->load->view('correcto',$data);
		$this->load->view('footer');
    }


    public function tarjetaPdf(){
    	$folio = $this->input->get("n");
    	$resultado = $this->Tarjeta_Model->getData($folio,"Folio");
    	$data['pagos'] = $this->Tarjeta_Model->getPayments($resultado[0]['folio']);
    	$data['result1'] = $resultado;
    	$data['url'] = base_url();
    	$this->load->view('tarjeta/tarjetaPdf',$data);
    }
}