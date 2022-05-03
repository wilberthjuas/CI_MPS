<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gruas extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->logged_in();
		$this->load->model('Gruas_Model');
	}

	private function logged_in() {
        if(! $this->session->userdata('authenticated')) {
            redirect('login');
        }
    }

	public function index()
	{
		$data['title'] = "BUSCAR GRÚA";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
		$this->load->view('header',$data);
		$this->load->view('gruas');
		$this->load->view('footer');
	}

    public function sendForm()
	{
		
		$searchTerm = $_POST['buscar'];
		$resultado =$this->Gruas_Model->getData($searchTerm);
		
		$data['title'] = "GRÚAS";
        $data['url'] = base_url();
		$data['result1'] = $resultado;
		$data['name'] = $this->session->userdata('name');
		$this->load->view('header',$data);
		$this->load->view('gruasResultado',$data);
		$this->load->view('footer');
	}

	public function setGrua(){
		$grua1 = $_POST['com1'];
		$grua2 = $_POST['com2'];
		$folio=$_POST['folio'];
		$this->load->model('Gruas_Model');
		$resultado =$this->Gruas_Model->setGrua($grua1,$grua2,$folio);
		$this->load->helper('url');
		session_start();
		$data['title'] = "GRÚAS";
        $data['url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('correcto',$data);
		$this->load->view('footer');
	}
}