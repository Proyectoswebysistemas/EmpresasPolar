<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	public function acceso($email, $password){
		$this->db->where("emp_email", $email);
		$this->db->where("emp_password", $password);
		$datos = $this->db->get("empleados");
			if($datos->num_rows() == 0){
				return false;
			}else if($datos->num_rows() == 1){
				foreach($datos->result() as $row){
					$item["emp_email"] = $row->emp_email; 
					$item["emp_nombre"] = $row->emp_nombre; 
					$item["emp_acceso"] = $row->emp_acceso; 
				}
				return $item;
			}
	}
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */