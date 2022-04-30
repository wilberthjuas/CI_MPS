<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visor extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		session_start();
		$data['title'] = "HISTORIAL";
		$data['url'] = base_url();
        $this->load->model('Visor_Model');
        $resultado =$this->Visor_Model->getData();
        $data['result1'] =  $resultado;
		$this->load->view('header',$data);
        $this->load->view('visor',$data);
		$this->load->view('footer');
	}
}
