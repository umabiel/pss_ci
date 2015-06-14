<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('categoria_model');
	}

	public function index()
	{

		$data['categorias'] = $this->categoria_model->obtenerCategorias();


		$this->load->view('header');
		$this->load->view('principal', $data);
		$this->load->view('footer');
	}

}

/* End of file principal.php */
/* Location: ./application/controllers/principal.php */