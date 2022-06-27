<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Llamadas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->load->model('Llamadas_Model', 'llamadas');
		$this->load->model('Vendedor_Model', 'vendedores');
		$this->load->model('util/Api_Utils_Model', 'api_utils');
		$this->load->library('form_validation');
		$this->method = $this->input->server('REQUEST_METHOD');
	}

	public function saveLlamada()
	{
		$this->api_utils->validate_method($this->method, ['POST']);
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('telefono', 'Telefono', 'required');
		$this->form_validation->set_rules('fecha', 'Fecha', 'required');
		$this->form_validation->set_rules('hora', 'Hora', 'required');
		if ($this->form_validation->run()) {
			try {
				$post = (Object)$this->input->post();
				$vendedor = $this->vendedores->get_vendedor_random();
				$llamada = $this->llamadas->save_Llamada($post->nombre, $post->telefono, $post->fecha, $post->hora, $vendedor->nombre);
				$post->id = $llamada;
				$this->llamadas->send_llamadaMail($post->id, $post->nombre, $post->telefono, $post->fecha, $post->hora, $vendedor->nombre);
				$this->api_utils->api_response([$llamada]);
			} catch (Exception $e) {
				$error = $this->api_utils->create_error_object(500, 'Error en el servidor' ,$e->getMessage());
				$this->api_utils->api_response($error, 0, 500);
			}
		}else{
			$this->api_utils->response_form_error();
		}
	}

}