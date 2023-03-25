<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polizas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->load->model('Poliza_Model', 'polizas');
		$this->load->model('Tarjeta_Model','tarjetas');
		$this->load->model('util/Api_Utils_Model', 'api_utils');
		$this->method = $this->input->server('REQUEST_METHOD');
	}

	public function getPoliza()
	{
		$this->api_utils->validate_method($this->method, ['POST']);
		try {
			$request = json_decode($this->input->raw_input_stream);
			if( $request->{'poliza'} != null && $request->{'poliza'} != "" && $request->{'numero'} != null && 
				$request->{'numero'} != "" ){

				$poliza = $this->polizas->getMobileData($request->{'poliza'});

				if( count($poliza) > 0 && substr($poliza[0]['telefono'], - 4) == $request->{'numero'}){
					$polizas["poliza"] = $poliza[0];
					$polizas["pago"]   = $this->tarjetas->getPayments($poliza[0]['folio']);
					$polizas["cobertura"] = $this->polizas->getCobertura($poliza[0]['id_cobertura']);
					
				} else{
					$polizas= [];	
				}
				
			} else {
				$polizas = [];
			}
			$this->api_utils->api_response($polizas, 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}


	public function testMail($value='')
	{
		$this->api_utils->validate_method($this->method, ['GET']);
		try {
			$poliza = $this->polizas->notifyNewPolicy("");
			$this->api_utils->api_response($poliza, 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}

}