<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Poliza extends CI_Controller {
 

 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->helper('url');
 		$this->logged_in();
 		$this->load->model('Poliza_Model');
 		$this->load->model('Cobrador_Model');
 		$this->load->model('Plataforma_Model');
 		$this->load->model('Vendedor_Model');
 		$this->load->model('Cobertura_Model');
 		$this->load->model('Municipio_Model');
 	}

 	private function logged_in() {
        if(! $this->session->userdata('authenticated')) {
            redirect('login');
        }
    }

 	public function index(){
 		
		$data['title'] = "REGISTRO DE NUEVA PÓLIZA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
		$this->load->view('header',$data);
		$data['cobradores'] = $this->Cobrador_Model->get_cobradorCRUD();
		$data['plataformas']= $this->Plataforma_Model->get_plataformaCRUD();
		$data['vendedores'] = $this->Vendedor_Model->get_vendedorCRUD();
		$data['coberturas'] = $this->Cobertura_Model->get_coberturaCRUD();
		$data['municipios'] = $this->Municipio_Model->get_municipioCRUD();
		$this->load->view('poliza/nueva',$data);
		$this->load->view('footer');
 	}

 	public function sendNewPolicy(){
 		$data['title'] = "REGISTRO DE NUEVA PÓLIZA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
 		if($this->input->server('REQUEST_METHOD') == "POST"){
 			
 			$save = array(
 				'nombre'=> $this->input->post("nombre"),
 				'domicilio'=> $this->input->post("domicilio"),
 				'exterior'=> $this->input->post("exterior"),
 				'entre'=> $this->input->post("entre"),
 				'col'=> $this->input->post("col"),
 				'municipio'=> $this->input->post("municipio"),
 				'telefono'=> $this->input->post("telefono"),
 				'cp'=> $this->input->post("cp"),
 				'marca'=> $this->input->post("marca"),
 				'tipo'=> $this->input->post("tipo"),
 				'ano'=> $this->input->post("ano"),
 				'color'=> $this->input->post("color"),
 				'placas'=> $this->input->post("placas"),
 				'version'=> $this->input->post("version"),
 				'serie'=> $this->input->post("serie"),
 				'nmotor'=> $this->input->post("nmotor"),
 				'expedicion'=> $this->input->post("expedicion"),
 				'vigencia'=> $this->input->post("vigencia"),
 				'cobertura'=> $this->input->post("cobertura"),
 				'deducible'=> $this->input->post("deducible"),
 				'costo_total'=> $this->input->post("costo_total"),
 				'observaciones'=> $this->input->post("observaciones"),
 				'pagoinicial'=> $this->input->post("pagoinicial"),
 				'pagomensual'=> $this->input->post("pagomensual"),
 				'plazo'=> $this->input->post("plazo"),
 				'captura'=> $this->input->post("captura"),
 				'vendedor'=> $this->input->post("vendedor"),
 				'cobrador'=> $this->input->post("cobrador"),
 				'plataforma'=> $this->input->post("plataforma"),
 			);

 			$resultSave['id'] = $this->Poliza_Model->savePoliza($save); 
 			$this->load->view('header',$data);
			$this->load->view('poliza/respuesta',$resultSave);
			$this->load->view('footer');
 			
 		}
 		else{
 			$resultSave['id'] = false;
 			$this->load->view('header',$data);
			$this->load->view('poliza/respuesta',$resultSave);
			$this->load->view('footer');
 		}
 	}

 	public function modificar(){
 		$data['title'] = "MODIFICAR";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');

        $this->load->view('header',$data);
		$this->load->view('poliza/modificar',$data);
		$this->load->view('footer');
 	}

 	public function modifyPolicy(){
 		
		$policy= $this->input->post("buscar");
		$poliza = $this->Poliza_Model->getPolicy($policy);
		$data['result'] = $poliza;
		$data['title'] = "ACTUALIZAR PÓLIZA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
		$this->load->view('header',$data);
		$data['cobradores'] = $this->Cobrador_Model->get_cobradorCRUD();
		$data['plataformas']= $this->Plataforma_Model->get_plataformaCRUD();
		$data['vendedores'] = $this->Vendedor_Model->get_vendedorCRUD();
		$data['coberturas'] = $this->Cobertura_Model->get_coberturaCRUD();
		$data['municipios'] = $this->Municipio_Model->get_municipioCRUD();
		$this->load->view('poliza/actualizar',$data);
		$this->load->view('footer');
 	}

 	public function updatePolicy(){
 		$data['title'] = "ACTUALIZAR PÓLIZA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
 		$update = array(
			'folio'=> $this->input->post('folio'),
			'nombre'=> $this->input->post("nombre"),
			'domicilio'=> $this->input->post("domicilio"),
			'exterior'=> $this->input->post("exterior"),
			'entre'=> $this->input->post("entre"),
			'col'=> $this->input->post("col"),
			'municipio'=> $this->input->post("municipio"),
			'tipo'=> $this->input->post("tipo"),
			'telefono'=> $this->input->post("tel"),
			'expedicion'=> $this->input->post("expedicion"),
			'vigencia'=> $this->input->post("vigencia"),
			'cobertura'=> $this->input->post("cobertura"),
			'placas'=> $this->input->post("placas"),
			'serie'=> $this->input->post("serie"),
			'nmotor'=> $this->input->post("nmotor"),
			'pagomensual'=> $this->input->post("pagomensual"),
			'vendedor'=> $this->input->post("vendedor"),
			'cobrador'=> $this->input->post("cobrador"),
			'ano2'=> $this->input->post("ano2"),
			'costo_total'=> $this->input->post("costo_total"),
			'color'=> $this->input->post("color"),
			'ano'=> $this->input->post("ano"),
			'version'=> $this->input->post("version"),
			'marca'=> $this->input->post("marca"),
			'plataforma'=> $this->input->post("plataforma"),
 			);
 		$resultUpdate['id'] = $this->Poliza_Model->updatePolicy($update);
 		$this->load->view('header',$data);
		$this->load->view('poliza/respuesta',$resultUpdate);
		$this->load->view('footer');
 	}

 	/*public function cargarCobertura(){
 		$this->Poliza_Model->fillCoberturas();
 		redirect(base_url('Poliza/modificar'));
 	}

 	public function migrarDatos(){
 		$this->Poliza_Model->migrateData();
 		redirect(base_url('Poliza/modificar'));
 	}*/
 
 }
 
 /* End of file Poliza.php */
 /* Location: ./application/controllers/Poliza.php */