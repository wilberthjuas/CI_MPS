<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		session_start();
		$data['title'] = "REGISTRO DE NUEVO PAGO";
        $data['url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('registro');
		$this->load->view('footer');
	}
}
