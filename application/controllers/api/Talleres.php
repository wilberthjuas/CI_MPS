<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talleres extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->load->model('Taller_Model', 'talleres');
		$this->load->model('util/Api_Utils_Model', 'api_utils');
		$this->load->model('Estado_Model', 'estados');
		$this->method = $this->input->server('REQUEST_METHOD');
	}

	public function getTalleres()
	{
		$this->api_utils->validate_method($this->method, ['GET']);
		try {
			$talleres = $this->talleres->get_tallerCRUD();	
			foreach ($talleres as $taller) {
				$taller->estado = $this->estados->find_estado($taller->estado)->estado;
			}
			$this->api_utils->api_response($talleres, 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}


}