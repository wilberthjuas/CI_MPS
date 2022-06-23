<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursales extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->load->model('Sucursal_Model', 'sucursales');
		$this->load->model('util/Api_Utils_Model', 'api_utils');
		$this->method = $this->input->server('REQUEST_METHOD');
	}

	public function getSucursales()
	{
		$this->api_utils->validate_method($this->method, ['GET']);
		try {
			$sucursales = $this->sucursales->get_sucursalCRUD();	
			$this->api_utils->api_response($sucursales, 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}


}