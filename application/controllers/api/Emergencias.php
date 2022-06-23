<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emergencias extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->load->model('Emergencia_model', 'emergencias');
		$this->load->model('util/api_utils_model', 'api_utils');
		$this->method = $this->input->server('REQUEST_METHOD');
	}

	public function getEmergencias()
	{
		$this->api_utils->validate_method($this->method, ['GET']);
		try {
			$emergencias = $this->emergencias->get_emergenciaCRUD();	
			$this->api_utils->api_response($emergencias, 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}


}