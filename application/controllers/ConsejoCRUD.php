<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConsejoCRUD extends CI_Controller {

	public function __construct() {
	   	parent::__construct(); 
	   	$this->load->helper('url');
	   	$this->logged_in();
	   	$this->load->library('form_validation');

	   	$this->load->model('Consejo_Model');


	  
	}

	private function logged_in() {
	   	if(! $this->session->userdata('authenticated')) {
	   		redirect('login');
	   	}
	}

   
   	public function index()
   	{
   		$data['data'] = $this->Consejo_Model->get_consejoCRUD();


   		$data['title'] = "CONSEJOS";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');

	   	$this->load->view('header',$data); 
	   	$this->load->view('tablasDinamicas/libreriasH');
	   	$this->load->view('consejoCRUD/list',$data);
	   	$this->load->view('tablasDinamicas/implementacionF');
	   	$this->load->view('footer');
	}



	public function show($id)
   	{
   		$consejo = $this->Consejo_Model->find_consejo($id);
   		$data['title'] = "MOSTRAR CONSEJO";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header', $data);
   		$this->load->view('consejoCRUD/show',array('consejo'=>$consejo));
   		$this->load->view('footer');
   	}


   	public function create()
   	{
   		$data['title'] = "AGREGAR CONSEJO";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header',$data);
   		$this->load->view('consejoCRUD/create');
   		$this->load->view('footer');   
   	}


   
   	public function store()
   	{
   		$this->form_validation->set_rules('description', 'Description', 'trim|required');
   		$this->form_validation->set_rules('titulo', 'Titulo', 'trim|required');

	   	if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('consejoCRUD/create'));
	   	}else{
	   		$this->Consejo_Model->insert_consejo();
	   		redirect(base_url('consejoCRUD'));
   		}
   	}


   
   	public function edit($id)
   	{
   		$consejo = $this->Consejo_Model->find_consejo($id);
   		$data['title'] = "EDITAR CONSEJO";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
	   	$this->load->view('header',$data);
	   	$this->load->view('consejoCRUD/edit',array('consejo'=>$consejo));
	   	$this->load->view('footer');
   	}


   
   	public function update($id)
   	{
   		
   		$this->form_validation->set_rules('description', 'Description', 'trim|required');
   		$this->form_validation->set_rules('titulo', 'Titulo', 'trim|required');

   		if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('consejoCRUD/edit/'.$id));
	   	}else{ 
	   		$this->Consejo_Model->update_consejo($id);
	   		redirect(base_url('consejoCRUD'));
	   	}
   	}


 	public function delete($id)
   	{
   		$consejo = $this->Consejo_Model->delete_consejo($id);
   		redirect(base_url('consejoCRUD'));
   	}
}