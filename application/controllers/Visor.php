<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visor extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->logged_in();
		$this->load->model('Visor_Model');
	}

	private function logged_in() {
        if(! $this->session->userdata('authenticated')) {
            redirect('login');
        }
    }

	public function index()
	{
		$data['title'] = "HISTORIAL";
		$data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
        $resultado =$this->Visor_Model->getData();
        $data['result1'] =  $resultado;
		$this->load->view('header',$data);
		$this->load->view('tablasDinamicas/libreriasH');
        $this->load->view('visores/historial',$data);
        $this->load->view('tablasDinamicas/implementacionF');
		$this->load->view('footer');
	}

	public function visorimpresion(){
		$data['title'] = "VISOR/IMPRESIÓN";
		$data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
        $this->load->view('header',$data);
        $this->load->view('visores/form_visor',$data);
		$this->load->view('footer');
	}

	public function visorimpresionPdf(){
		$a = $this->input->post('buscar');
        $b = $this->input->post('tipo');
        $resultado =$this->Visor_Model->getImpresion($a,$b);
        $data['result1'] = $resultado;
        $data['url'] = base_url();
        $data['a'] = $a;
        $data['b'] = $b;
        $this->load->view('visores/impresion',$data);
	}

	public function visorPolizaWeb($folio = ""){
		if( $folio != ""){
			$resultado =$this->Visor_Model->getImpresion($folio,"Folio");
	        $data['result1'] = $resultado;
	        $data['url'] = base_url();
	        $data['a'] = $folio;
	        $data['b'] = "Folio";
	        $this->load->view('visores/impresion',$data);
		}
        
	}

}
