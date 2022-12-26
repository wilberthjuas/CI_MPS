<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mundial extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->load->model('Mundial_Model', 'mundial');
		$this->load->model('util/Api_Utils_Model', 'api_utils');
		$this->method = $this->input->server('REQUEST_METHOD');
	}

	public function registerJersey()
	{
		try {
			$request = json_decode($this->input->raw_input_stream);
			$idPlayera = $this->mundial->registerJersey($request->{'folio'}, $request->{'nombre'}, $request->{'celular'});
			$this->api_utils->api_response([$idPlayera]);
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}


}