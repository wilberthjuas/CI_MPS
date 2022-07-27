<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siniestro extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->load->model('Siniestro_Model', 'siniestro');
		$this->load->model('Poliza_Model', 'polizas');
		$this->load->model('util/Api_Utils_Model', 'api_utils');
		$this->method = $this->input->server('REQUEST_METHOD');
	}

	public function reportar()
	{
		$this->api_utils->validate_method($this->method, ['POST']);
		try {
			$request = json_decode($this->input->raw_input_stream);
			$row = $this->polizas->getPolicy($request->{'poliza'});
			$idSiniestro = $this->siniestro->report($request);
			$response['idSiniestro'] = $idSiniestro;
			$this->siniestro->reportAccident($idSiniestro,$request,$row[0]['telefono']);
			$result = $this->siniestro->sendWhatsApp($idSiniestro,$request,$row[0]['telefono']);
			$this->api_utils->api_response($response, 1);
				
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}


	public function initialize(){
		$this->api_utils->validate_method($this->method, ['GET']);
		try {
			$response = $this->siniestro->initializeWhats();
			$this->api_utils->api_response($response, 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}

	public function cron(){
		$response = $this->siniestro->initializeWhats();
	}


}