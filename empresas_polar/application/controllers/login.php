<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->library('form_validation');
		$this->load->model('login_model', '', TRUE);
	}
	public function index(){
		switch ($this->input->post()) {
			case false:
				$data['titulo_pagina'] = "Inicio sesión";
				$this->load->view('login', $data);
			break;
			case true:
				$this->reglas();
					switch ($this->form_validation->run()) {
						case false:
							$data['titulo_pagina'] = "Inicio sesión";
							$this->load->view('login', $data);
						break;
						case true:
							$email = $this->input->post('emp_email');
							$password = $this->input->post('emp_password');
							$acceso = $this->login_model->acceso($email, $password);
								if($acceso == false){
									redirect("login?acceso=0");
								}else{
									$this->session->set_userdata('email', $acceso["emp_email"]);
									$this->session->set_userdata('nombre', $acceso["emp_nombre"]);
									$this->session->set_userdata('acceso', $acceso["emp_acceso"]);
									redirect('escritorio');
								}
						break;
					}
			break;
		}
	}
	public function desconectar(){
		$this->session->sess_destroy();
		redirect('login');
	}
	public function reglas(){
		$config = array(
			array(
				"field"  => "emp_email",
				"label"  => "Correo electronico",
				"rules"  => "required|valid_email|max_length[120]",
				"errors" => array(
					"required"    => "El campo %s es de tipo requerido",
					"valid_email" => "El campo %s es de tipo email",
					"max_length"  => "El campo %s solo tiene 120 caracteres",
				),
			),
			array(
				"field"  => "emp_password",
				"label"  => "Clave de acceso",
				"rules"  => "required|max_length[30]",
				"errors" => array(
					"required"   => "El campo %s es de tipo requerido",
					"max_length" => "El campo %s solo tiene 30 caracteres",
				),
			),
		);
		$this->form_validation->set_rules($config);
	}
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */