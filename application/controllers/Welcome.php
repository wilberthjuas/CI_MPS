<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		session_start();
		$data['title'] = "";
		$data['url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}
}
