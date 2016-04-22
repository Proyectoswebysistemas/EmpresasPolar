<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleadosmodel extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function crear($data){
		$this->db->insert("empleados", $data);
	}
	public function editar($id, $data){
		$this->db->where('emp_id', $id);
		$this->db->update('empleados', $data);
	}
	public function datos_editar($id){
		$this->db->where("emp_id", $id);
		$datos = $this->db->get("empleados");
			if($datos->num_rows() == 0){
				echo "Ha ocurrido un problema con el número de id de empleado....";
				exit();
			}else{
				return $datos->result();
			}
	}
	public function eliminar($id){
		$this->db->where('emp_id', $id);
		$this->db->delete('empleados');
	}
	public function listado(){
		$this->db->select('emp_id, emp_nombre, emp_email, emp_acceso');
		$this->db->order_by('emp_nombre', 'asc');
		$query = $this->db->get("empleados");
		return $query->result();
	}
}

/* End of file empleadosmodel.php */
/* Location: ./application/models/empleadosmodel.php */