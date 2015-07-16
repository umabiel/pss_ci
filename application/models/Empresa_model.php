<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function obtenerEmpresas()
	{
		$this->db->where('estado', 1);
		$query = $this->db->get('empresas');
		if ($query->num_rows() > 0) {
			return $query;
		}else{
			return false;
		}
	}

	public function obtenerEmpresa($id)
	{
		$this->db->where('id', $id);
		$this->db->where('estado', 1);
		$query = $this->db->get('empresas');
		if ($query->num_rows() > 0) {
			return $query;
		}else{
			return false;
		}
	}

	public function obtenerEmpresasXCategoria($idCategoria)
	{
		$this->db->where('categoria_id', $idCategoria);
		$query = $this->db->get('empresas');
		if ($query->num_rows() > 0) {
			return $query;
		}else{
			return false;
		}
	}

	public function insertarEmpresa($data)
	{
		$datos = array(
			'ruc' => $data['txtRucEmpresa'],
			'categoria_id' => $data['cmbCategoriaEmpresa'],
			'razonsocial' => $data['txtRazonSocialEmpresa'],
			'nombrecomercial' => $data['txtNombreComercialEmpresa'],
			'descripcion' => $data['txtDescripcionEmpresa'],
			'web' => $data['txtWebEmpresa'],
			'contacto1' => $data['txtNombreContactoEmpresa'],
			'apaterno' => $data['txtAPaternoContactoEmpresa'],
			'amaterno' => $data['txtAMaternoContactoEmpresa'],
			'cargo' => $data['txtCargoEmpresa'],
			'correo1' => $data['txtEmailContactoEmpresa'],
			'celular1' => $data['txtCelularContactoEmpresa'],
			'telefono1' => $data['txtTelefonoEmpresa'],
			'direccion' => $data['txtDirecccionEmpresa'],
			'logotipo' => $data['logotipo'],
			'pdf_link' => $data['pdf_link']
			);

		$this->db->insert('empresas', $datos);

	}

	public function actualizarempresa($data)
	{

		if (isset($data['logotipo'])) {
			$datos = array(
				'ruc' => $data['txtRucEmpresa'],
				'categoria_id' => $data['cmbCategoriaEmpresa'],
				'razonsocial' => $data['txtRazonSocialEmpresa'],
				'nombrecomercial' => $data['txtNombreComercialEmpresa'],
				'descripcion' => $data['txtDescripcionEmpresa'],
				'web' => $data['txtWebEmpresa'],
				'contacto1' => $data['txtNombreContactoEmpresa'],
				'apaterno' => $data['txtAPaternoContactoEmpresa'],
				'amaterno' => $data['txtAMaternoContactoEmpresa'],
				'cargo' => $data['txtCargoEmpresa'],
				'correo1' => $data['txtEmailContactoEmpresa'],
				'celular1' => $data['txtCelularContactoEmpresa'],
				'telefono1' => $data['txtTelefonoEmpresa'],
				'direccion' => $data['txtDirecccionEmpresa'],
				'logotipo' => $data['logotipo']
			);
		} elseif (isset($data['pdf_link'])) {
			$datos = array(
				'ruc' => $data['txtRucEmpresa'],
				'categoria_id' => $data['cmbCategoriaEmpresa'],
				'razonsocial' => $data['txtRazonSocialEmpresa'],
				'nombrecomercial' => $data['txtNombreComercialEmpresa'],
				'descripcion' => $data['txtDescripcionEmpresa'],
				'web' => $data['txtWebEmpresa'],
				'contacto1' => $data['txtNombreContactoEmpresa'],
				'apaterno' => $data['txtAPaternoContactoEmpresa'],
				'amaterno' => $data['txtAMaternoContactoEmpresa'],
				'cargo' => $data['txtCargoEmpresa'],
				'correo1' => $data['txtEmailContactoEmpresa'],
				'celular1' => $data['txtCelularContactoEmpresa'],
				'telefono1' => $data['txtTelefonoEmpresa'],
				'direccion' => $data['txtDirecccionEmpresa'],
				'logotipo' => $data['logotipo'],
				'pdf_link' => $data['pdf_link']
			);
		} else {

			$datos = array(
				'ruc' => $data['txtRucEmpresa'],
				'categoria_id' => $data['cmbCategoriaEmpresa'],
				'razonsocial' => $data['txtRazonSocialEmpresa'],
				'nombrecomercial' => $data['txtNombreComercialEmpresa'],
				'descripcion' => $data['txtDescripcionEmpresa'],
				'web' => $data['txtWebEmpresa'],
				'contacto1' => $data['txtNombreContactoEmpresa'],
				'apaterno' => $data['txtAPaternoContactoEmpresa'],
				'amaterno' => $data['txtAMaternoContactoEmpresa'],
				'cargo' => $data['txtCargoEmpresa'],
				'correo1' => $data['txtEmailContactoEmpresa'],
				'celular1' => $data['txtCelularContactoEmpresa'],
				'telefono1' => $data['txtTelefonoEmpresa'],
				'direccion' => $data['txtDirecccionEmpresa']
			);
		}



		$this->db->where('id', $data['txtEmpresaId']);
		return $this->db->update('empresas', $datos);
	}

	public function eliminarEmpresa($idEmpresa)
	{
		$datos = array(
			'estado' => 0 
			);
		$this->db->where('id', $idEmpresa);

		return $this->db->update('empresas', $datos);

		//return $this->db->delete('empresas');
	}

}

/* End of file empresa_model.php */
/* Location: ./application/models/empresa_model.php */