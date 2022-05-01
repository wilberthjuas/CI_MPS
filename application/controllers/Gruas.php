<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gruas extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		session_start();
		$data['title'] = "BUSCAR GRÚA";
        $data['url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('gruas');
		$this->load->view('footer');
	}

    public function sendForm()
	{
		$this->load->model('Gruas_Model');
		$searchTerm = $_POST['buscar'];
		$resultado =$this->Gruas_Model->getData($searchTerm);
		$this->load->helper('url');
		session_start();
		$data['title'] = "GRÚAS";
        $data['url'] = base_url();
		$data['result1'] = $resultado;
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