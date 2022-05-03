<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
		$this->logged_in();
		$this->load->model('Visor_Model');
	}

	private function logged_in() {
        if(! $this->session->userdata('authenticated')) {
            redirect('login');
        }
    }

	public function index()
	{
		$data['title'] = "DESCARGA DE ARCHIVO EXCEL";
        $data['url'] = base_url();
        $data['name'] = $this->session->userdata('name');
		$this->load->view('header',$data);
		$this->load->view('excel/form_excel');
		$this->load->view('footer');
	}

	public function download(){
		$f1 = $this->input->post("buscar1");
		$f2 = $this->input->post("buscar2");
		$result =$this->Visor_Model->getDataBetweenDates($f1,$f2);
		
		// Load the download helper and send the file to your desktop
		$this->load->helper('download');
		force_download(date('Y:m:d:m:s').'.csv', $result);

	    /*header("Content-type: application/csv");
	    header("Content-Disposition: attachment; filename=\"test".".csv\"");
	    header("Pragma: no-cache");
	    header("Expires: 0");

	    $handle = fopen('php://output', 'w');
		fputcsv($handle, $result);
	    fclose($handle);
	    exit;*/
	}

}

/* End of file Excel.php */
/* Location: ./application/controllers/Excel.php */
 ?>