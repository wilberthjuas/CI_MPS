<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaboradores extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->logged_in();
		$this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Colaborador_Model');  
	}

	private function logged_in() {
        if( $this->session->userdata('authenticated')) {
            redirect('login');
        }
    }

	public function actc($param = "")
	{
		$data['url'] = base_url();
		$data['correo'] = urldecode($param);
		$this->load->view('colaborador/cobrador', $data);
	}

	public function actcfs(){
		$this->form_validation->set_rules('user', 'Usuario', 'trim|required');
        $this->form_validation->set_rules('password', 'Contraseña', 'trim|required|min_length[8]|max_length[40]|regex_match[/\d/]|regex_match[/[A-Z]/]|regex_match[/[a-z]/]|regex_match[/[\$!#&@?_-]/]');
        $this->form_validation->set_rules('confirm', 'Confirmacion', 'trim|required|matches[password]');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run() == false){
        	$data['url'] = base_url();
			$data['correo'] = $this->security->xss_clean($this->input->post('user'));
            $this->load->view('colaborador/cobrador', $data);
        } 
        else {
            $user = $this->security->xss_clean($this->input->post('user'));
            $password = $this->security->xss_clean($this->input->post('password'));
            
            $cc = $this->Colaborador_Model->createUserM($user,$password);
            if($cc){
                $data['url'] = base_url();
                $this->load->view('colaborador/scExito', $data);
            }
            else {
                $this->session->set_flashdata('message', 'Datos invalidos');
                $data['url'] = base_url();
                $data['correo'] = $this->security->xss_clean($this->input->post('user'));
                $this->load->view('colaborador/cobrador', $data);
            }
        }
	}

    public function avtv($param = ""){
        $data['url'] = base_url();
        if($param != ""){
            $vendedor = $this->Colaborador_Model->getVendorData(urldecode($param));
            $data['correo'] = $vendedor->correo;
            $data['nombre'] = $vendedor->nombre;
        }
        else{
            $data['correo'] = "";
            $data['nombre'] = ""; 
        }
        
        $this->load->view('colaborador/sVendor', $data);
    }

    public function avtvsbse(){
        $this->form_validation->set_rules('email', 'Correo electrónico','trim|required');
        $this->form_validation->set_rules('user', 'Usuario', 'trim|required');
        $this->form_validation->set_rules('password', 'Contraseña', 'trim|required|min_length[8]|max_length[40]|regex_match[/\d/]|regex_match[/[A-Z]/]|regex_match[/[a-z]/]|regex_match[/[\$!#&@?_-]/]');
        $this->form_validation->set_rules('confirm', 'Confirmacion', 'trim|required|matches[password]');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run() == false){
            $data['url'] = base_url();
            $data['correo'] = $this->security->xss_clean($this->input->post('email'));
            $this->load->view('colaborador/sVendor', $data);
        } 
        else {
            $user = $this->security->xss_clean($this->input->post('user'));
            $pwd  = $this->security->xss_clean($this->input->post('password'));
            $mail = $this->security->xss_clean($this->input->post('email'));

            $cc = $this->Colaborador_Model->setUser($user,$pwd,$mail);
            
            if($cc){
                $data['url'] = base_url();
                $this->load->view('colaborador/svExito', $data);
            }
            else {
                $this->session->set_flashdata('message', 'Datos invalidos');
                redirect('Colaboradores/avtv');
            }
        }
    }

    public function avtvsok(){
        redirect('login');
    }

}