<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Users_Model');
        $this->load->helper('url');
    }
    
    private function logged_in()
    {
        if( ! $this->session->userdata('authenticated')){
            redirect('Usuarios/login');
        }
    }
    
    
    public function login()
    {
        $data['url'] = base_url();
        $this->form_validation->set_rules('user', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'required');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run() == false){
            $this->load->view('users/login', $data);
        } 
        else {
            $user = $this->security->xss_clean($this->input->post('user'));
            $password = $this->security->xss_clean($this->input->post('password'));
            
            $user = $this->Users_Model->login($user, $password);
            
            if($user){
                $userdata = array(
        //////TODO MOVERLE A ESTE ARRAY
                    'name' => $user->nombre,
                    'type' => $user->user_type,
                    'id' => $user->user_id,
                    'authenticated' => TRUE
                );
                
                $this->session->set_userdata($userdata);
                
                redirect('Welcome');
            }
            else {
                $this->session->set_flashdata('message', 'Invalid user or password');
                redirect('login');
            }
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
?>