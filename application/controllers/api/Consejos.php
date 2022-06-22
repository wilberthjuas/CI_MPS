<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consejos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->load->model('Consejo_model', 'consejos');
		$this->load->model('util/api_utils_model', 'api_utils');
		$this->method = $this->input->server('REQUEST_METHOD');
	}

	public function getConsejos()
	{
		$this->api_utils->validate_method($this->method, ['GET']);
		try {
			$consejos = $this->consejos->get_consejoCRUD();	
			$this->api_utils->api_response($consejos, 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}


}