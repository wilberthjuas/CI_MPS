<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlataformaCRUD extends CI_Controller {

	public function __construct() {
	   	parent::__construct(); 
	   	$this->load->helper('url');
	   	$this->logged_in();
	   	$this->load->library('form_validation');

	   	$this->load->model('Plataforma_Model');


	  
	}

	private function logged_in() {
	   	if(! $this->session->userdata('authenticated')) {
	   		redirect('login');
	   	}
	}

   
   	public function index()
   	{
   		$data['data'] = $this->Plataforma_Model->get_plataformaCRUD();


   		$data['title'] = "PLATAFORMAS";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');

	   	$this->load->view('header',$data); 
	   	$this->load->view('tablasDinamicas/libreriasH');
	   	$this->load->view('plataformaCRUD/list',$data);
	   	$this->load->view('tablasDinamicas/implementacionF');
	   	$this->load->view('footer');
	}



	public function show($id)
   	{
   		$plataforma = $this->Plataforma_Model->find_plataforma($id);
   		$data['title'] = "MOSTRAR PLATAFORMA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header', $data);
   		$this->load->view('plataformaCRUD/show',array('plataforma'=>$plataforma));
   		$this->load->view('footer');
   	}


   	public function create()
   	{
   		$data['title'] = "AGREGAR PLATAFORMA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header',$data);
   		$this->load->view('plataformaCRUD/create');
   		$this->load->view('footer');   
   	}


   
   	public function store()
   	{
   		$this->form_validation->set_rules('description', 'Description', 'trim|required');


	   	if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('plataformaCRUD/create'));
	   	}else{
	   		$this->Plataforma_Model->insert_plataforma();
	   		redirect(base_url('plataformaCRUD'));
   		}
   	}


   
   	public function edit($id)
   	{
   		$plataforma = $this->Plataforma_Model->find_plataforma($id);
   		$data['title'] = "EDITAR PLATAFORMA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
	   	$this->load->view('header',$data);
	   	$this->load->view('plataformaCRUD/edit',array('plataforma'=>$plataforma));
	   	$this->load->view('footer');
   	}


   
   	public function update($id)
   	{
   		
   		$this->form_validation->set_rules('description', 'Description', 'trim|required');


   		if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('plataformaCRUD/edit/'.$id));
	   	}else{ 
	   		$this->Plataforma_Model->update_plataforma($id);
	   		redirect(base_url('plataformaCRUD'));
	   	}
   	}


 	public function delete($id)
   	{
   		$plataforma = $this->Plataforma_Model->delete_plataforma($id);
   		redirect(base_url('plataformaCRUD'));
   	}
}