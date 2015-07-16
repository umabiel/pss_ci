<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function obtenerCategorias()
	{
		$query = $this->db->get('categorias');
		if ($query->num_rows() > 0) {
			return $query;
		}else{
			return false;
		}
	}


	public function obtenerCategoria($idCategoria)
	{
		$this->db->where('id', $idCategoria);
		$query = $this->db->get('categorias');
		if ($query->num_rows() > 0) {
			return $query;
		}else{
			return false;
		}
	}

	public function obtenerCategoriaDetalles($idCategoria)
	{
		$this->db->where('categoria_id', $idCategoria);
		$query = $this->db->get('categoria_detalle');
		if ($query->num_rows() > 0) {
			return $query;
		}else{
			return false;
		}
	}

	public function insertarCategoria($data)
	{
		$datos = array(
			'categoria' => $data['txtNombreCategoria'],
			'icono' => $data['icono'],
			'fondo' => $data['fondo'],
			'cabecera' => $data['cabecera'],
			'botonCategoria' => $data['botonCategoria']
		);

		$this->db->insert('categorias', $datos);
	}

	public function actualizarcategoria($data)
	{
		if (isset($data['chkIcono'])) {
			
			$datos = array(
				'categoria' => $data['txtNombreCategoria'],
				'icono' => $data['icono']
			);

		} elseif (isset($data['chkFondo'])) {
			
			$datos = array(
				'categoria' => $data['txtNombreCategoria'],
				'fondo' => $data['fondo']
			);

		} elseif (isset($data['chkCabecera'])) {
			
			$datos = array(
				'categoria' => $data['txtNombreCategoria'],
				'cabecera' => $data['cabecera']
			);

		} elseif (isset($data['chkBoton'])) {
			
			$datos = array(
				'categoria' => $data['txtNombreCategoria'],
				'botonCategoria' => $data['botonCategoria']
			);
		} else {

			$datos = array(
				'categoria' => $data['txtNombreCategoria'],
				'icono' => $data['icono'],
				'fondo' => $data['fondo'],
				'cabecera' => $data['cabecera'],
				'botonCategoria' => $data['botonCategoria']
			);

		}

		$this->db->where('id', $data['txtCategoriaId']);
		return $this->db->update('categorias', $datos);
	}

	public function eliminarCategoria($idCategoria)
	{
		$this->db->where('id', $idCategoria);
		return $this->db->delete('categorias');
	}
	

}

/* End of file caterogoria_model.php */
/* Location: ./application/models/caterogoria_model.php */