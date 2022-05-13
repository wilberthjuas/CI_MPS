<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SucursalCRUD extends CI_Controller {

	public function __construct() {
	   	parent::__construct(); 
	   	$this->load->helper('url');
	   	$this->logged_in();
	   	$this->load->library('form_validation');
	   	$this->load->model('Sucursal_Model');	  
	}

	private function logged_in() {
	   	if(! $this->session->userdata('authenticated')) {
	   		redirect('login');
	   	}
	}

   
   	public function index()
   	{
   		$data['data'] = $this->Sucursal_Model->get_sucursalCRUD();


   		$data['title'] = "SUCURSALES";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');

	   	$this->load->view('header',$data); 
	   	$this->load->view('tablasDinamicas/libreriasH');
	   	$this->load->view('sucursalCRUD/list',$data);
	   	$this->load->view('tablasDinamicas/implementacionF');
	   	$this->load->view('footer');
	}



	public function show($id)
   	{
   		$sucursal = $this->Sucursal_Model->find_sucursal($id);
   		$data['title'] = "MOSTRAR SUCURSAL";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header', $data);
   		$estados = $this->Sucursal_Model->get_Estados();
   		$this->load->view('sucursalCRUD/show',array('sucursal'=>$sucursal,'estados'=>$estados));
   		$this->load->view('footer');
   	}


   	public function create()
   	{
   		$data['title'] = "AGREGAR SUCURSAL";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header',$data);
   		$data['estados']  = $this->Sucursal_Model->get_Estados();
   		$this->load->view('sucursalCRUD/create',$data);
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
	   		redirect(base_url('sucursalCRUD/create'));
	   	}else{
	   		$this->Sucursal_Model->insert_sucursal();
	   		redirect(base_url('sucursalCRUD'));
   		}
   	}


   
   	public function edit($id)
   	{
   		$sucursal = $this->Sucursal_Model->find_sucursal($id);
   		$data['title'] = "EDITAR SUCURSAL";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
	   	$this->load->view('header',$data);
	   	$estados = $this->Sucursal_Model->get_Estados();
	   	$this->load->view('sucursalCRUD/edit',array('sucursal'=>$sucursal,'estados'=>$estados));
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
	   		redirect(base_url('sucursalCRUD/edit/'.$id));
	   	}else{ 
	   		$this->Sucursal_Model->update_sucursal($id);
	   		redirect(base_url('sucursalCRUD'));
	   	}
   	}


 	public function delete($id)
   	{
   		$sucursal = $this->Sucursal_Model->delete_sucursal($id);
   		redirect(base_url('sucursalCRUD'));
   	}
}