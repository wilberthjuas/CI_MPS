<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MunicipioCRUD extends CI_Controller {

	public function __construct() {
	   	parent::__construct(); 
	   	$this->load->helper('url');
	   	$this->logged_in();
	   	$this->load->library('form_validation');

	   	$this->load->model('Municipio_Model');	  
	}

	private function logged_in() {
	   	if(! $this->session->userdata('authenticated')) {
	   		redirect('login');
	   	}
	}

   
   	public function index()
   	{
   		$data['data'] = $this->Municipio_Model->get_municipioCRUD();


   		$data['title'] = "MUNICIPIOS";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');

	   	$this->load->view('header',$data);       
	   	$this->load->view('municipioCRUD/list',$data);
	   	$this->load->view('footer');
	}



	public function show($id)
   	{
   		$municipio = $this->Municipio_Model->find_municipio($id);
   		$data['title'] = "MOSTRAR MUNICIPIO";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header', $data);
   		$this->load->view('municipioCRUD/show',array('municipio'=>$municipio));
   		$this->load->view('footer');
   	}


   	public function create()
   	{
   		$data['title'] = "AGREGAR MUNICIPIO";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header',$data);
   		$this->load->view('municipioCRUD/create');
   		$this->load->view('footer');   
   	}


   
   	public function store()
   	{
   		$this->form_validation->set_rules('description', 'Description', 'trim|required');


	   	if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('municipioCRUD/create'));
	   	}else{
	   		$this->Municipio_Model->insert_municipio();
	   		redirect(base_url('municipioCRUD'));
   		}
   	}


   
   	public function edit($id)
   	{
   		$municipio = $this->Municipio_Model->find_municipio($id);
   		$data['title'] = "EDITAR MUNICIPIO";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
	   	$this->load->view('header',$data);
	   	$this->load->view('municipioCRUD/edit',array('municipio'=>$municipio));
	   	$this->load->view('footer');
   	}


   
   	public function update($id)
   	{
   		
   		$this->form_validation->set_rules('description', 'Description', 'trim|required');


   		if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('municipioCRUD/edit/'.$id));
	   	}else{ 
	   		$this->Municipio_Model->update_municipio($id);
	   		redirect(base_url('municipioCRUD'));
	   	}
   	}


 	public function delete($id)
   	{
   		$municipio = $this->Municipio_Model->delete_municipio($id);
   		redirect(base_url('municipioCRUD'));
   	}
}