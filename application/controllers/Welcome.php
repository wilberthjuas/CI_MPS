<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->logged_in();
		
	}

	private function logged_in() {
        if(! $this->session->userdata('authenticated')) {
            redirect('Usuarios/login');
        }
    }
	
	public function index()
	{
		$data['title'] = "MPS";
		$data['name'] = $this->session->userdata('name');
		$data['url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}


	public function mail()
	{
		$data['title'] = "MPS";
		$data['name'] = $this->session->userdata('name');
		$data['url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('mailTemplate');
		$this->load->view('footer');
	}
}
