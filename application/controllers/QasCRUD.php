<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QasCRUD extends CI_Controller {

	public function __construct() {
	   	parent::__construct(); 
	   	$this->load->helper('url');
	   	$this->logged_in();
	   	$this->load->library('form_validation');
	   	$this->load->model('Qas_Model');
	}

	private function logged_in() {
	   	if(! $this->session->userdata('authenticated')) {
	   		redirect('login');
	   	}
	}

   
   	public function index()
   	{
   		$data['data'] = $this->Qas_Model->get_qasCRUD();


   		$data['title'] = "PREGUNTAS Y RESPUESTAS";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');

	   	$this->load->view('header',$data); 
	   	$this->load->view('tablasDinamicas/libreriasH');
	   	$this->load->view('qasCRUD/list',$data);
	   	$this->load->view('tablasDinamicas/implementacionF');
	   	$this->load->view('footer');
	}



	public function show($id)
   	{
   		$qas = $this->Qas_Model->find_qas($id);
   		$data['title'] = "MOSTRAR PREGUNTAS Y RESPUESTAS";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header', $data);
   		$this->load->view('qasCRUD/show',array('qas'=>$qas));
   		$this->load->view('footer');
   	}


   	public function create()
   	{
   		$data['title'] = "AGREGAR PREGUNTA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header',$data);
   		$this->load->view('qasCRUD/create');
   		$this->load->view('footer');   
   	}


   
   	public function store()
   	{
   		$this->form_validation->set_rules('pregunta', 'Pregunta', 'trim|required');
   		$this->form_validation->set_rules('respuesta', 'Respuesta', 'trim|required');


	   	if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('qasCRUD/create'));
	   	}else{
	   		$this->Qas_Model->insert_qas();
	   		redirect(base_url('qasCRUD'));
   		}
   	}


   
   	public function edit($id)
   	{
   		$qas = $this->Qas_Model->find_qas($id);
   		$data['title'] = "EDITAR PREGUNTA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
	   	$this->load->view('header',$data);
	   	$this->load->view('qasCRUD/edit',array('qas'=>$qas));
	   	$this->load->view('footer');
   	}


   
   	public function update($id)
   	{
   		
   		$this->form_validation->set_rules('pregunta', 'Pregunta', 'trim|required');
   		$this->form_validation->set_rules('respuesta', 'Respuesta', 'trim|required');

   		if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('qasCRUD/edit/'.$id));
	   	}else{ 
	   		$this->Qas_Model->update_qas($id);
	   		redirect(base_url('qasCRUD'));
	   	}
   	}


 	public function delete($id)
   	{
   		$qas = $this->Qas_Model->delete_qas($id);
   		redirect(base_url('qasCRUD'));
   	}
}