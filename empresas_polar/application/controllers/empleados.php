<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('empleadosmodel', '', true);
		if( ($this->session->userdata('email') == null or empty($this->session->userdata('email'))) ){
			redirect("errors/html/error_404");
		}elseif ( $this->session->userdata('acceso')!="administrador" ) {
			redirect('escritorio?acceso=false');
		}
	}
	public function index(){
		$data['datos'] = $this->empleadosmodel->listado();
		$data['titulo_pagina'] = "Crear empleados";
		$data['item_descripcion'] = array(
			array(
				array("link"      => "empleados/index"),   
				array("etiqueta"  => "Empleados"),   
				array("icon"      => "fa fa-user"),
			),
			array(
				array("link"  => "empleados/index"),   
				array("etiqueta"  => "Listado"),   
				array("icon" => "fa fa-bars"),
			),
		);
		$this->load->view('plantilla/head', $data);
		$this->load->view('plantilla/nav');
		$this->load->view('empleados/listado');
		$this->load->view('plantilla/footer');
	}
	public function crear(){
		switch($this->input->post()){
			case false:
				$data['titulo_pagina'] = "Crear empleados";
				$data['item_descripcion'] = array(
					array(
						array("link"      => "empleados/index"),   
						array("etiqueta"  => "Empleados"),   
						array("icon"      => "fa fa-user"),
					),
					array(
						array("link"  => "empleados/crear"),   
						array("etiqueta"  => "Crear"),   
						array("icon" => "fa fa-plus-circle"),
					),
				);
				$data['opciones'] = array(
					"administrador" => "Administrador",
					"operador" => "Operador",
				);
				$this->load->view('plantilla/head', $data);
				$this->load->view('plantilla/nav');
				$this->load->view('empleados/crear');
				$this->load->view('plantilla/footer');
			break;
			case true:
				$this->reglas();
					switch ($this->form_validation->run()) {
						case false:
							$data['titulo_pagina'] = "Crear empleados";
							$data['item_descripcion'] = array(
								array(
									array("link"      => "empleados/index"),   
									array("etiqueta"  => "Empleados"),   
									array("icon"      => "fa fa-user"),
								),
								array(
									array("link"  => "empleados/crear"),   
									array("etiqueta"  => "Crear"),   
									array("icon" => "fa fa-plus-circle"),
								),
							);
							$data['opciones'] = array(
								"administrador" => "Administrador",
								"operador" => "Operador",
							);
							$this->load->view('plantilla/head', $data);
							$this->load->view('plantilla/nav');
							$this->load->view('empleados/crear');
							$this->load->view('plantilla/footer');
						break;
						case true:
							$this->empleadosmodel->crear($this->input->post());
							redirect('empleados/index');
						break;
					}
			break;
		}
	}
	public function editar($id = null){
		switch ($this->input->post()) {
			case false:
				$data['datos'] = $this->empleadosmodel->datos_editar($id);
				$data['titulo_pagina'] = "Editar empleados";
				$data['item_descripcion'] = array(
					array(
						array("link"      => "empleados/index"),   
						array("etiqueta"  => "Empleados"),   
						array("icon"      => "fa fa-user"),
					),
				);
				$data['opciones'] = array(
					"administrador" => "Administrador",
					"operador" => "Operador",
				);
				$this->load->view('plantilla/head', $data);
				$this->load->view('plantilla/nav');
				$this->load->view('empleados/editar');
				$this->load->view('plantilla/footer');
			break;
			case true:
				$this->reglas();
					switch ($this->form_validation->run()) {
						case false:
							$data['datos'] = $this->empleadosmodel->datos_editar($id);
							$data['titulo_pagina'] = "Editar empleados";
							$data['item_descripcion'] = array(
								array(
									array("link"      => "empleados/index"),   
									array("etiqueta"  => "Empleados"),   
									array("icon"      => "fa fa-user"),
								),
							);
							$data['opciones'] = array(
								"administrador" => "Administrador",
								"operador" => "Operador",
							);
							$this->load->view('plantilla/head', $data);
							$this->load->view('plantilla/nav');
							$this->load->view('empleados/editar');
							$this->load->view('plantilla/footer');
						break;
						case true:
							$this->empleadosmodel->editar($id, $this->input->post());
							redirect('empleados/index');
						break;
					}
			break;
		}
	}
	public function confirmar_eliminar($id = null){
		$data['id'] = $id;
		$data['titulo_pagina'] = "Confirmar eliminar empleado";
		$this->load->view('empleados/confirmar_eliminar', $data);
	}
	public function eliminar($id){
		$this->empleadosmodel->eliminar($id);
		redirect('empleados/index');
	}
	public function reglas(){
		$configuracion = array(
			array(
				"field"  => "emp_nombre",
				"label"  => "Nombre y apellidos",
				"rules"  => "required|max_length[120]",
				"errors" => array(
					"required" => "%s es de tipo requerido, ingresa un valor",
					"max_length" => "La longitud de caracteres permitido para %s es 120",
				)
			),
			array(
				"field"  => "emp_email",
				"label"  => "Email",
				"rules"  => "required|max_length[120]|valid_email",
				"errors" => array(
					"required"    => "%s es de tipo requerido, ingresa un valor",
					"max_length"  => "La longitud de caracteres permitido para %s es 120",
					"valid_email" => "Ingresa un correo electronico valido",
				)
			),
			array(
				"field"  => "emp_password",
				"label"  => "Password",
				"rules"  => "required|max_length[30]|trim",
				"errors" => array(
					"required"    => "%s es de tipo requerido, ingresa un valor",
					"max_length"  => "La longitud de caracteres permitido para %s es 30",
				)
			),
		); 
		$this->form_validation->set_rules($configuracion);
	}
}
/* End of file empleados.php */
/* Location: ./application/controllers/empleados.php */