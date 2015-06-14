<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('empresa_model');
		$this->load->model('categoria_model');
	}

	public function index()
	{
		$data['idEmpresa'] = $this->uri->segment(3);
		$data['idCategoria'] = $this->uri->segment(4);

		if (!$data['idEmpresa']) {
			$data['empresas'] = $this->empresa_model->obtenerEmpresas();
		}else{
			$data['empresas'] = $this->empresa_model->obtenerEmpresa($data['idEmpresa']);
			$data['categoria'] = $this->categoria_model->obtenerCategoria($data['idCategoria']);
		}

		$this->load->view('header');
		$this->load->view('empresa/empresa', $data);
		$this->load->view('footer');
	}

	public function view()
	{
		$this->index();
	}

}

/* End of file empresa.php */
/* Location: ./application/controllers/empresa.php */