<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('empresa_model');
		$this->load->model('categoria_model');
	}

	public function index()
	{
		$data['idCategoria'] = $this->uri->segment(3);

		if (!$data['idCategoria']) {
			$data['categoria'] = $this->categoria_model->obtenerCategorias();
		}else{
			$data['categoria'] = $this->categoria_model->obtenerCategoria($data['idCategoria']);
			$data['empresas'] = $this->empresa_model->obtenerEmpresasXCategoria($data['idCategoria']);
		}		

		$this->load->view('header');
		$this->load->view('categoria/categoria', $data);
		$this->load->view('footer');
	}

	public function view()
	{
		$this->index();
	}

	public function empresas()
	{
		$data['idCategoria'] = $this->uri->segment(3);

		if (!$data['idCategoria']) {
			$data['empresas'] = $this->empresa_model->obtenerEmpresas();
		}else{
			$data['empresas'] = $this->empresa_model->obtenerEmpresasXCategoria($data['idCategoria']);
		}

		$this->load->view('header');
		$this->load->view('categoria/empresas', $data);
		$this->load->view('footer');
	}
	

}

/* End of file categoria.php */
/* Location: ./application/controllers/categoria.php */