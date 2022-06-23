<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendedores extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->load->model('Vendedor_Model', 'vendedores');
		$this->load->model('util/Api_Utils_Model', 'api_utils');
		$this->method = $this->input->server('REQUEST_METHOD');
	}

	public function getVendedorRandom()
	{
		$this->api_utils->validate_method($this->method, ['GET']);
		try {
			$vendor = $this->vendedores->get_vendedor_random();	
			$this->api_utils->api_response([$vendor], 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}



}