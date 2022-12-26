<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CoberturaCRUD extends CI_Controller {

	public function __construct() {
	   	parent::__construct(); 
	   	$this->load->helper('url');
	   	$this->logged_in();
	   	$this->load->library('form_validation');
	   	$this->load->model('Cobertura_Model');
	}

	private function logged_in() {
	   	if(! $this->session->userdata('authenticated')) {
	   		redirect('login');
	   	}
	}

   
   	public function index()
   	{

   		$data['data'] = $this->Cobertura_Model->get_coberturaCRUD();
   		$data['title'] = "COBERTURAS";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');

	   	$this->load->view('header',$data);
	   	$this->load->view('tablasDinamicas/libreriasH');
	   	$this->load->view('coberturaCRUD/list',$data);
	   	$this->load->view('tablasDinamicas/implementacionF');
	   	$this->load->view('footer');
	}



	public function show($id)
   	{
   		$cobertura = $this->Cobertura_Model->find_cobertura($id);
   		$data['title'] = "MOSTRAR COBERTURA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header', $data);
   		$this->load->view('coberturaCRUD/show',array('cobertura'=>$cobertura));
   		$this->load->view('footer');
   	}


   	public function create()
   	{
   		$data['title'] = "AGREGAR COBERTURA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header',$data);
   		$this->load->view('coberturaCRUD/create');
   		$this->load->view('footer');   
   	}


   
   	public function store()
   	{
   		$this->form_validation->set_rules('cobertura', 'cobertura', 'trim|required');

	   	if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('coberturaCRUD/create'));
	   	}else{
	   		$this->Cobertura_Model->insert_cobertura();
	   		redirect(base_url('coberturaCRUD'));
   		}
   	}


   
   	public function edit($id)
   	{
   		$cobertura = $this->Cobertura_Model->find_cobertura($id);
   		$data['title'] = "EDITAR COBERTURA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
	   	$this->load->view('header',$data);
	   	$this->load->view('coberturaCRUD/edit',array('cobertura'=>$cobertura));
	   	$this->load->view('footer');
   	}


   
   	public function update($id)
   	{
   		$this->form_validation->set_rules('cobertura', 'cobertura', 'trim|required');

   		if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('coberturaCRUD/edit/'.$id));
	   	}else{ 
	   		$this->Cobertura_Model->update_cobertura($id);
	   		redirect(base_url('coberturaCRUD'));
	   	}
   	}


 	public function delete($id)
   	{
   		$cobertura = $this->Cobertura_Model->delete_cobertura($id);
   		redirect(base_url('coberturaCRUD'));
   	}
}