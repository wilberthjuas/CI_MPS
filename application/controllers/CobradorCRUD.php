<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CobradorCRUD extends CI_Controller {

	public function __construct() {
	   	parent::__construct(); 
	   	$this->load->helper('url');
	   	$this->logged_in();
	   	$this->load->library('form_validation');
	   	$this->load->model('Cobrador_Model');
	}

	private function logged_in() {
	   	if(! $this->session->userdata('authenticated')) {
	   		redirect('login');
	   	}
	}

   
   	public function index()
   	{
   		$data['data'] = $this->Cobrador_Model->get_cobradorCRUD();
   		$data['title'] = "COBRADORES";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');

	   	$this->load->view('header',$data); 
	   	$this->load->view('tablasDinamicas/libreriasH');      
	   	$this->load->view('cobradorCRUD/list',$data);
	   	$this->load->view('tablasDinamicas/implementacionF');
	   	$this->load->view('footer');
	}



	public function show($id)
   	{
   		$cobrador = $this->Cobrador_Model->find_cobrador($id);
   		$data['title'] = "MOSTRAR COBRADOR";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header', $data);
   		$this->load->view('cobradorCRUD/show',array('cobrador'=>$cobrador));
   		$this->load->view('footer');
   	}


   	public function create()
   	{
   		$data['title'] = "AGREGAR COBRADOR";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header',$data);
   		$this->load->view('cobradorCRUD/create');
   		$this->load->view('footer');   
   	}


   
   	public function store()
   	{
   		$this->form_validation->set_rules('name', 'Name', 'trim|required');
   		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
   		$this->form_validation->set_rules('email', 'Email', 'trim|required');


	   	if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('cobradorCRUD/create'));
	   	}else{
	   		$this->Cobrador_Model->insert_cobrador();
	   		redirect(base_url('cobradorCRUD'));
   		}
   	}


   
   	public function edit($id)
   	{
   		$cobrador = $this->Cobrador_Model->find_cobrador($id);
   		$data['title'] = "EDITAR COBRADOR";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
	   	$this->load->view('header',$data);
	   	$this->load->view('cobradorCRUD/edit',array('cobrador'=>$cobrador));
	   	$this->load->view('footer');
   	}


   
   	public function update($id)
   	{
   		
   		$this->form_validation->set_rules('name', 'Name', 'trim|required');
   		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
   		$this->form_validation->set_rules('email', 'Email', 'trim|required');


   		if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('cobradorCRUD/edit/'.$id));
	   	}else{ 
	   		$this->Cobrador_Model->update_cobrador($id);
	   		redirect(base_url('cobradorCRUD'));
	   	}
   	}


 	public function delete($id)
   	{
   		$cobrador = $this->Cobrador_Model->delete_cobrador($id);
   		redirect(base_url('cobradorCRUD'));
   	}
}