<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PromocionCRUD extends CI_Controller {

	public function __construct() {
	   	parent::__construct(); 
	   	$this->load->helper('url');
	   	$this->logged_in();
	   	$this->load->library('form_validation');
	   	$this->load->model('Promocion_Model');
	}

	private function logged_in() {
	   	if(! $this->session->userdata('authenticated')) {
	   		redirect('login');
	   	}
	}

   
   	public function index()
   	{
   		$data['data'] = $this->Promocion_Model->get_promocionCRUD();
   		$data['title'] = "PROMOCIONES";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');

	   	$this->load->view('header',$data); 
	   	$this->load->view('tablasDinamicas/libreriasH');
	   	$this->load->view('promocionCRUD/list',$data);
	   	$this->load->view('tablasDinamicas/implementacionF');
	   	$this->load->view('footer');
	}



	public function show($id)
   	{
   		$promocion = $this->Promocion_Model->find_promocion($id);
   		$data['title'] = "MOSTRAR PROMOCIÓN";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header', $data);
   		$this->load->view('promocionCRUD/show',array('promocion'=>$promocion));
   		$this->load->view('footer');
   	}


   	public function create()
   	{
   		$data['title'] = "AGREGAR PROMOCIÓN";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
   		$this->load->view('header',$data);
   		$this->load->helper(array('form', 'url'));
   		$this->load->view('promocionCRUD/create');
   		$this->load->view('footer');   
   	}


   
   	public function store()
   	{
   		$this->form_validation->set_rules('description', 'Description', 'trim|required');
   		$this->form_validation->set_rules('titulo', 'Titulo', 'trim|required');

	   	if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('promocionCRUD/create'));
	   	}else{
	   		$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "jpg|png|jpeg",
				'overwrite' => TRUE,
				'max_size' => "2048000"
				);
	   		$this->load->library('upload', $config);
	   		$this->upload->initialize($config); 
	   		if($this->upload->do_upload('banner')){
	   			$fileName = $this->upload->data('file_name');
	   			$this->Promocion_Model->insert_promocion($fileName);	
	   			redirect(base_url('promocionCRUD'));
	   		}else{
	   			$data['error_msg'] = $this->upload->display_errors();
	   			$this->load->view('promocionCRUD/error',$data);
	   		}
	   		
	   		
   		}
   	}


   
   	public function edit($id)
   	{
   		$promocion = $this->Promocion_Model->find_promocion($id);
   		$data['title'] = "EDITAR PROMOCIÓN";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
	   	$this->load->view('header',$data);
	   	$this->load->view('promocionCRUD/edit',array('promocion'=>$promocion));
	   	$this->load->view('footer');
   	}


   
   	public function update($id)
   	{
   		
   		$this->form_validation->set_rules('description', 'Description', 'trim|required');


   		if ($this->form_validation->run() == FALSE){
	   		$this->session->set_flashdata('errors', validation_errors());
	   		redirect(base_url('promocionCRUD/edit/'.$id));
	   	}else{ 
	   		$this->Promocion_Model->update_promocion($id);
	   		redirect(base_url('promocionCRUD'));
	   	}
   	}


 	public function delete($id)
   	{
   		$promocion = $this->Promocion_Model->delete_promocion($id);
   		redirect(base_url('promocionCRUD'));
   	}
}