<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TallerCRUD extends CI_Controller {

	public function __construct() {
	   	parent::__construct(); 
	   	$this->load->helper('url');
	   	$this->logged_in();
	   	$this->load->library('form_validation');
	   	$this->load->model('Taller_Model');	  
	}

	private function logged_in() {
	   	if(! $this->session->userdata('authenticated')) {
	   		redirect('login');
	   	}
	}

   
   	public function index()
   	{
   		$data['data'] = $this->Taller_Model->get_tallerCRUD();


   		$data['title'] = "TALLERES";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');

	   	$this->load->view('header',$data); 
	   	$this->load->view('tablasDinamicas/libreriasH');
	   	$this->load->view('tallerCRUD/list',$data);
	   	$this->load->view('tablasDinamicas/implementacionF');
	   	$this->load->view('footer');
	}



	public function show($id)
   	{
   		$taller = $this->Taller_Model->find_taller($id);
   		$data['title'] = "MOSTRAR TALLER";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header', $data);
   		$estados = $this->Taller_Model->get_Estados();
   		$this->load->view('tallerCRUD/show',array('taller'=>$taller,'estados'=>$estados));
   		$this->load->view('footer');
   	}


   	public function create()
   	{
   		$data['title'] = "AGREGAR TALLER";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header',$data);
   		$data['estados']  = $this->Taller_Model->get_Estados();
   		$this->load->view('tallerCRUD/create',$data);
   		$this->load->view('footer');   
   	}


   
   	public function store()
   	{
   		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
   		$this->form_validation->set_rules('telefono1', 'Telefono', 'trim|required');
   		$this->form_validation->set_rules('direccion', 'Direccion', 'trim|required');
   		$this->form_validation->set_rules('colonia', 'Colonia', 'trim|required');
   		$this->form_validation->set_rules('municipio', 'Municipio', 'trim|required');
   		$this->form_validation->set_rules('estado', 'Estado', 'trim|required');
   		$this->form_validation->set_rules('cp', 'Codigo Postal', 'trim|required');


	   	if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('tallerCRUD/create'));
	   	}else{
	   		$this->Taller_Model->insert_taller();
	   		redirect(base_url('tallerCRUD'));
   		}
   	}


   
   	public function edit($id)
   	{
   		$taller = $this->Taller_Model->find_taller($id);
   		$data['title'] = "EDITAR TALLER";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
	   	$this->load->view('header',$data);
	   	$estados = $this->Taller_Model->get_Estados();
	   	$this->load->view('tallerCRUD/edit',array('taller'=>$taller,'estados'=>$estados));
	   	$this->load->view('footer');
   	}


   
   	public function update($id)
   	{
   		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
   		$this->form_validation->set_rules('telefono1', 'Telefono', 'trim|required');
   		$this->form_validation->set_rules('direccion', 'Direccion', 'trim|required');
   		$this->form_validation->set_rules('colonia', 'Colonia', 'trim|required');
   		$this->form_validation->set_rules('municipio', 'Municipio', 'trim|required');
   		$this->form_validation->set_rules('estado', 'Estado', 'trim|required');
   		$this->form_validation->set_rules('cp', 'Codigo Postal', 'trim|required');

   		if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('tallerCRUD/edit/'.$id));
	   	}else{ 
	   		$this->Taller_Model->update_taller($id);
	   		redirect(base_url('tallerCRUD'));
	   	}
   	}


 	public function delete($id)
   	{
   		$taller = $this->Taller_Model->delete_taller($id);
   		redirect(base_url('tallerCRUD'));
   	}
}