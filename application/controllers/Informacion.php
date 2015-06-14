<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informacion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('correos_model');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('informacion');
		$this->load->view('footer');
	}

	public function enviar()
	{
		$datos['nombre'] = $this->input->post('txtNombre');
		$datos['pais'] = $this->input->post('txtPais');
		$datos['empresa'] = $this->input->post('txtNombreEmpresa');
		$datos['correo'] = $this->input->post('txtCorreo');
		$datos['cargo'] = $this->input->post('txtCargo');
		$datos['consulta'] = $this->input->post('txtConsulta');

		$result = $this->correos_model->insertarCorreo($datos);

		//cargamos la libreria email de ci
		// $this->load->library("email");
 
		// $configGmail = array(
		// 	'protocol' => 'smtp',
		// 	'smtp_host' => 'ssl://smtp.gmail.com',
		// 	'smtp_port' => 465,
		// 	'smtp_user' => 'correo_gmail',
		// 	'smtp_pass' => 'password',
		// 	'mailtype' => 'html',
		// 	'charset' => 'utf-8',
		// 	'newline' => "\r\n"
		// );    
 
		// $this->email->initialize($configGmail);
 
		// $this->email->from('CAMBIARCORREO@DOMINIO.COM');
		// $this->email->to($datos['correo']);
		// $this->email->subject('Gracias por su visita');
		// $this->email->message('Gracias por su visita, le estaremos enviando los datos de las empresas que le interese');
		// $this->email->send();


		redirect('principal');
		
	}

}

/* End of file informacion.php */
/* Location: ./application/controllers/informacion.php */