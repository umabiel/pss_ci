<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Correos_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insertarCorreo($datos)
	{
		$data = array(
			'nombre' => $datos['nombre'],
			'pais' => $datos['pais'],
			'empresa' => $datos['empresa'],
			'correo' => $datos['correo'],
			'cargo' => $datos['cargo'],
			'consulta' => $datos['consulta']
		);

		return $this->db->insert('correos', $data);

	}

}

/* End of file correos_model.php */
/* Location: ./application/models/correos_model.php */