<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaborador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->load->model('Colaborador_Model', 'colaborador');
		$this->load->model('Municipio_Model', 'municipio');
		$this->load->model('Cobertura_Model', 'cobertura');
		$this->load->model('Cobrador_Model', 'cobradores');
		$this->load->model('Plataforma_Model', 'plataforma');
		$this->load->model('util/Api_Utils_Model', 'api_utils');
		$this->method = $this->input->server('REQUEST_METHOD');
	}

	public function masiveVendor()
	{
		$this->api_utils->validate_method($this->method, ['GET']);
		try {
			$mails = $this->colaborador->vendorMasiveR();
			$this->api_utils->api_response($mails, 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}

	public function masiveCollector()
	{
		$this->api_utils->validate_method($this->method, ['GET']);
		try {
			$mails = $this->colaborador->cMasiveR();
			$this->api_utils->api_response($mails, 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}

	}

	public function getUser(){
		$this->api_utils->validate_method($this->method, ['POST']);
		try {
			$request = json_decode($this->input->raw_input_stream);
			$reponse = $this->colaborador->getUser($request);	
			if( $reponse != false ){
				$this->api_utils->api_response($reponse, 1);
			}else{
				$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,'Posible fallo en AUTH');
				$this->api_utils->api_response($error, 0, 500);
			}
				
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}

	public function savePayment(){
		$this->api_utils->validate_method($this->method, ['POST']);
		try {
			$request = json_decode($this->input->raw_input_stream);
			$reponse = $this->colaborador->savePayment($request);
			if( $reponse != false ){
				$resp['response'] = $reponse;
				$this->api_utils->api_response($resp, 1);
			}else{
				$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,'Posible fallo');
				$this->api_utils->api_response($error, 0, 500);
			}
				
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}

	public function getPaymentsByUser(){
		$this->api_utils->validate_method($this->method, ['POST']);
		try {
			$request = json_decode($this->input->raw_input_stream);
			$reponse = $this->colaborador->getPaymentsByUser($request);
			if( $reponse != false ){
				$this->api_utils->api_response($reponse, 1);
			}else{
				$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,'Error 01XDC');
				$this->api_utils->api_response($error, 0, 500);
			}
				
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}


	public function getMunicipios()
	{
		$this->api_utils->validate_method($this->method, ['GET']);
		try {
			$mails = $this->municipio->get_municipioCRUD();
			$this->api_utils->api_response($mails, 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}

	}


	public function getCoberturas()
	{
		$this->api_utils->validate_method($this->method, ['GET']);
		try {
			$mails = $this->cobertura->getCoberturasDesc();
			$this->api_utils->api_response($mails, 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}

	}

	public function getCobradores()
	{
		$this->api_utils->validate_method($this->method, ['GET']);
		try {
			$mails = $this->cobradores->get_cobradorCRUD();
			$this->api_utils->api_response($mails, 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}


	public function getPlataformas()
	{
		$this->api_utils->validate_method($this->method, ['GET']);
		try {
			$mails = $this->plataforma->get_plataformaCRUD();
			$this->api_utils->api_response($mails, 1);	
		} catch (Exception $e) {
			$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
			$this->api_utils->api_response($error, 0, 500);
		}
	}











}