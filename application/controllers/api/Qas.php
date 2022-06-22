<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->load->model('Qas_model', 'QAS');
		$this->load->model('util/api_utils_model', 'api_utils');
		$this->method = $this->input->server('REQUEST_METHOD');
	}

	public function getQas()
	{
		$this->api_utils->validate_method($this->method, ['GET']);
		try {
			$qas = $this->QAS->get_qasCRUD();	
			$this->api_utils->api_response($qas, 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}


}