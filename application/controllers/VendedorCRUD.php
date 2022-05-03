<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VendedorCRUD extends CI_Controller {

	public function __construct() {
	   	parent::__construct(); 
	   	$this->load->helper('url');
	   	$this->logged_in();
	   	$this->load->library('form_validation');
	   	$this->load->model('Vendedor_Model');
	}

	private function logged_in() {
	   	if(! $this->session->userdata('authenticated')) {
	   		redirect('login');
	   	}
	}

   
   	public function index()
   	{
   		$data['data'] = $this->Vendedor_Model->get_vendedorCRUD();
   		$data['title'] = "VENDEDORES";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');

	   	$this->load->view('header',$data);       
	   	$this->load->view('vendedorCRUD/list',$data);
	   	$this->load->view('footer');
	}



	public function show($id)
   	{
   		$vendedor = $this->Vendedor_Model->find_vendedor($id);
   		$data['title'] = "MOSTRAR VENDEDOR";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header', $data);
   		$this->load->view('vendedorCRUD/show',array('vendedor'=>$vendedor));
   		$this->load->view('footer');
   	}


   	public function create()
   	{
   		$data['title'] = "AGREGAR VENDEDOR";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header',$data);
   		$this->load->view('vendedorCRUD/create');
   		$this->load->view('footer');   
   	}


   
   	public function store()
   	{
   		$this->form_validation->set_rules('name', 'Name', 'trim|required');
   		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
   		$this->form_validation->set_rules('email', 'Email', 'trim|required');


	   	if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('vendedorCRUD/create'));
	   	}else{
	   		$this->Vendedor_Model->insert_vendedor();
	   		redirect(base_url('vendedorCRUD'));
   		}
   	}


   
   	public function edit($id)
   	{
   		$vendedor = $this->Vendedor_Model->find_vendedor($id);
   		$data['title'] = "EDITAR VENDEDOR";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
	   	$this->load->view('header',$data);
	   	$this->load->view('vendedorCRUD/edit',array('vendedor'=>$vendedor));
	   	$this->load->view('footer');
   	}


   
   	public function update($id)
   	{
   		
   		$this->form_validation->set_rules('name', 'Name', 'trim|required');
   		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
   		$this->form_validation->set_rules('email', 'Email', 'trim|required');


   		if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('vendedorCRUD/edit/'.$id));
	   	}else{ 
	   		$this->Vendedor_Model->update_vendedor($id);
	   		redirect(base_url('vendedorCRUD'));
	   	}
   	}


 	public function delete($id)
   	{
   		$vendedor = $this->Vendedor_Model->delete_vendedor($id);
   		redirect(base_url('vendedorCRUD'));
   	}
}
