<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Escritorio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		if($this->session->userdata('email') == null or empty($this->session->userdata('email'))){
			redirect("errors/html/error_404");
		}
	}
	public function index()
	{
		$data['titulo_pagina'] = "Empresas Polar";	
		$this->load->view('plantilla/head', $data);
		$this->load->view('plantilla/nav');
		$this->load->view('escritorio');
		$this->load->view('plantilla/footer');
	}
}
/* End of file escritorio.php */
/* Location: ./application/controllers/escritorio.php */