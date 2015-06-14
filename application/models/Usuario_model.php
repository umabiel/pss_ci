<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function validate($user, $pass)
	{
		$this->db->select('usuario, nombre, email, cargo');
		$this->db->from('usuarios');
		$this->db->where('usuario', $user);
		$this->db->where('clave', $pass);
		$this->db->where('estado', 1);
		$this->db->join('cargo', 'cargo.id = usuarios.cargo_id');
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		}else{
			return false;
		}

	}

	public function obtenerCargo($idCargo)
	{
		$this->db->select('*');
		$this->db->from('cargo');
		$this->db->where('id', $idCargo);

		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		}else{
			return false;
		}
	}

}

/* End of file usuario_model.php */
/* Location: ./application/models/usuario_model.php */