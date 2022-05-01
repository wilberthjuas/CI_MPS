<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarjeta extends CI_Controller {
    public function index()
	{
		$this->load->helper('url');
		session_start();
		$data['title'] = "INFORMACIÓN DE TARJETA";
        $data['url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('tarjeta');
		$this->load->view('footer');
	}


    public function sendForm()
	{
    	$this->load->model('Tarjeta_Model');
        $a = $_POST['buscar'];
        $b = $_POST['tipo'];
		$resultado =$this->Tarjeta_Model->getData($a,$b);
		$this->load->helper('url');
		session_start();
		$data['title'] = "REGISTRO DE NUEVO PAGO";
        $data['url'] = base_url();
		$data['result1'] = $resultado;
		$this->load->view('header',$data);
		$this->load->view('tarjetaResultados',$data);
		$this->load->view('footer');
	}

    public function updateTable(){
        $this->load->model('Tarjeta_Model');
        $folio=$_POST['folio'];
	
        $fech['fech1']=$_POST['fech1'];
        $fech['fech2']=$_POST['fech2'];
        $fech['fech3']=$_POST['fech3'];
        $fech['fech4']=$_POST['fech4'];
        $fech['fech5']=$_POST['fech5'];
        $fech['fech6']=$_POST['fech6'];
        $fech['fech7']=$_POST['fech7'];
        $fech['fech8']=$_POST['fech8'];
        $fech['fech9']=$_POST['fech9'];
        $fech['fech10']=$_POST['fech10'];
        $fech['fech11']=$_POST['fech11'];
                
        $monto['monto1']=$_POST['monto1'];
        $monto['monto2']=$_POST['monto2'];
        $monto['monto3']=$_POST['monto3'];
        $monto['monto4']=$_POST['monto4'];
        $monto['monto5']=$_POST['monto5'];
        $monto['monto6']=$_POST['monto6'];
        $monto['monto7']=$_POST['monto7'];
        $monto['monto8']=$_POST['monto8'];
        $monto['monto9']=$_POST['monto9'];
        $monto['monto10']=$_POST['monto10'];
        $monto['monto11']=$_POST['monto11'];
        
		$resultado =$this->Tarjeta_Model->updateCard($folio,$fech,$monto);
		$this->load->helper('url');
		session_start();
		$data['title'] = "REGISTRO DE NUEVO PAGO";
        $data['url'] = base_url();
		$data['result1'] = $resultado;
		$this->load->view('header',$data);
		$this->load->view('correcto',$data);
		$this->load->view('footer');
    }
}