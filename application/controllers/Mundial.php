<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mundial extends CI_Controller {

	public function __construct() {
	   	parent::__construct(); 
	   	$this->load->helper('url');
	   	$this->logged_in();
	   	$this->load->model('Mundial_Model','mundial');
	}

	private function logged_in() {
	   	if(! $this->session->userdata('authenticated')) {
	   		redirect('login');
	   	}
	}

   
   	public function index()
   	{
   		$data['data'] = $this->mundial->getJerseys();


   		$data['title'] = "MUNDIAL QATAR 2022";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');

	   	$this->load->view('header',$data); 
	   	$this->load->view('tablasDinamicas/libreriasH');
	   	$this->load->view('mundial/list',$data);
	   	$this->load->view('tablasDinamicas/implementacionF');
	   	$this->load->view('footer');
	}

}