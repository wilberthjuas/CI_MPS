<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitudes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->load->model('Solicitudes_Model', 'solicitudes');
		$this->load->model('Cobrador_Model', 'cobradores');
		$this->load->model('Cliente_Model', 'clientes');
		$this->load->model('Poliza_Model', 'polizas');
		$this->load->model('util/Api_Utils_Model', 'api_utils');
		$this->load->library('form_validation');
		$this->method = $this->input->server('REQUEST_METHOD');
	}

	public function saveSolicitud()
	{
		$_POST = json_decode(file_get_contents("php://input"), true);	
		$this->api_utils->validate_method($this->method, ['POST']);
		$this->form_validation->set_rules('cliente_id', 'Cliente ID', 'required');
		$this->form_validation->set_rules('fecha', 'Fecha', 'required');
		$this->form_validation->set_rules('hora', 'Hora', 'required');
		if ($this->form_validation->run()) {
			try {
				$post = (Object)$_POST;
				$cliente = $this->clientes->getClient_byID($post->cliente_id);
				$direccion = $cliente->domicilio.' '.$cliente->municipio.' '.$cliente->cp;
				$poliza = $this->polizas->getPoliza_byClient($post->cliente_id);
				$cobrador = $this->cobradores->get_cobrador_random();
				$solicitud = $this->solicitudes->save_Solicitud($poliza->id, $post->fecha, $post->hora, $cobrador->nombre);
				$post->id = $solicitud;
				$this->solicitudes->send_SolicitudMail($post->id, $cliente->nombre, $cliente->telefono, $post->fecha, $post->hora,
							$cobrador->nombre, $direccion, $poliza->id, $poliza->placas);
				$this->api_utils->api_response([$post]);
			} catch (Exception $e) {
				$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
				$this->api_utils->api_response($error, 0, 500);
			}
		}else{
			$this->api_utils->response_form_error();
		}
	}

}