<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cotizador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->load->model('Cotizador_Model', 'cotizador');
		$this->load->model('util/Api_Utils_Model', 'api_utils');
		$this->method = $this->input->server('REQUEST_METHOD');
	}

	public function cotizar()
	{
		$this->api_utils->validate_method($this->method, ['POST']);
		try {
			$request = json_decode($this->input->raw_input_stream);
			$idCotizador = $this->cotizador->saveCotizacion($request);	
			if( $idCotizador != null && $idCotizador != ""){
				$reponse['idCotizador'] = $idCotizador;
				$this->api_utils->api_response($reponse, 1);
			}else{
				$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
				$this->api_utils->api_response($error, 0, 500);
			}
				
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}
}