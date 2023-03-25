<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PagoTransaccion extends CI_Controller {

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
		$data['title'] = "Registro de pagos";
		$data['name'] = $this->session->userdata('name');
		$data['url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('pagotransaccion/pagos');
		$this->load->view('footer');
	}

	public function reportes()
	{
		$data['title'] = "Reportes de pagos";
		$data['name'] = $this->session->userdata('name');
		$data['url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('pagotransaccion/reportes');
		$this->load->view('footer');
	}
}
?>