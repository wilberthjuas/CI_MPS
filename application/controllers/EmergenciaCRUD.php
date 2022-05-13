<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmergenciaCRUD extends CI_Controller {

	public function __construct() {
	   	parent::__construct(); 
	   	$this->load->helper('url');
	   	$this->logged_in();
	   	$this->load->library('form_validation');
	   	$this->load->model('Emergencia_Model');	  
	}

	private function logged_in() {
	   	if(! $this->session->userdata('authenticated')) {
	   		redirect('login');
	   	}
	}

   
   	public function index()
   	{
   		$data['data'] = $this->Emergencia_Model->get_emergenciaContactos();


   		$data['title'] = "CONTACTOS DE EMERGENCIA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');

	   	$this->load->view('header',$data); 
	   	$this->load->view('tablasDinamicas/libreriasH');
	   	$this->load->view('emergenciaCRUD/list',$data);
	   	$this->load->view('tablasDinamicas/implementacionF');
	   	$this->load->view('footer');
	}



	public function show($id)
   	{
   		$emergencia = $this->Emergencia_Model->find_emergencia($id);
   		$data['title'] = "MOSTRAR CONTACTO DE EMERGENCIA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header', $data);
   		$this->load->view('emergenciaCRUD/show',array('emergencia'=>$emergencia));
   		$this->load->view('footer');
   	}


   	public function create()
   	{
   		$data['title'] = "AGREGAR CONTACTO DE EMERGENCIA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header',$data);
   		$data['Sucursales']  = $this->Emergencia_Model->get_Sucursales();
   		$this->load->view('emergenciaCRUD/create',$data);
   		$this->load->view('footer');   
   	}


   
   	public function store()
   	{
   		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
   		$this->form_validation->set_rules('telefono1', 'Telefono', 'trim|required');

	   	if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('emergenciaCRUD/create'));
	   	}else{
	   		$this->Emergencia_Model->insert_emergencia();
	   		redirect(base_url('emergenciaCRUD'));
   		}
   	}


   
   	public function edit($id)
   	{
   		$emergencia = $this->Emergencia_Model->find_edit_emergencia($id);
   		$data['title'] = "EDITAR CONTACTO DE EMERGENCIA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
	   	$this->load->view('header',$data);
	   	$Sucursales = $this->Emergencia_Model->get_Sucursales();
	   	$this->load->view('emergenciaCRUD/edit',array('emergencia'=>$emergencia,'Sucursales'=>$Sucursales));
	   	$this->load->view('footer');
   	}


   
   	public function update($id)
   	{
   		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
   		$this->form_validation->set_rules('telefono1', 'Telefono', 'trim|required');

   		if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('emergenciaCRUD/edit/'.$id));
	   	}else{ 
	   		$this->Emergencia_Model->update_emergencia($id);
	   		redirect(base_url('emergenciaCRUD'));
	   	}
   	}


 	public function delete($id)
   	{
   		$emergencia = $this->Emergencia_Model->delete_emergencia($id);
   		redirect(base_url('emergenciaCRUD'));
   	}
}