<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Utils_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->log_payload = ['user_id'=>null, 'response_code' =>null];
		$this->available_response = ['300','301','302','303','400','401','403','404','500'];
	}

	public function api_response( $data = null, $success = true, $response_code = 200, $custom_data = null )
	{
		if(!$success){
			$response_code = in_array($response_code, $this->available_response) ? $response_code : 500;
		} 
		
		$this->response( $data, $success, $response_code, $custom_data );
	}

	public function response($data = null, $success = true, $response_code = 200, $custom_data = null )
	{
	    http_response_code($response_code);
	    header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
		header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

	    if( $success ){
	        $response = [
	            'data' => $data
	        ];
	    } else {
	        $response = [
	            'errors' => $data
	        ];
	    }
	    if($custom_data){
	        $response['custom_data'] = $custom_data;
	    }
	    $this->dump( $response, false );
	}

	public function valid_post()
	{
		if( !$this->input->post() ){
			$message = 'post fields missing';
			$this->api_response($message, false, 400);
		}
	}

	public function validate_method($method, $allowedList = [])
	{
		if($method == 'OPTIONS'){
			api_allowed_options(implode(',', $allowedList));
		} elseif(!in_array($method, $allowedList)){
			$this->error_uncaught_method($method);
		}
	}

	public function error_uncaught_method($method)
	{
		$error = $this->create_error_object(400, "Método inválido {$method}", 'El método consumido no corresponde a su especificación');
		$this->api_response($error, 0, 400);
	}

	public function create_error_object($status, $title, $detail)
	{
		$error_response = array();
		$error_response[0] = new stdClass();
		$error_response[0]->status = intval($status);
		$error_response[0]->title = $title;
		$error_response[0]->detail = $detail;
	
		return $error_response;
	}

	public function dump( $var, $text = false )
	{
	    if( $text ){
	        echo "<pre>";
	            print_r($var);
	        echo "</pre>";
	        exit;
	    } else{
	        header('Content-Type: application/json');
	        echo json_encode($var);
	        exit;
	    }
	}

}