<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->model('usuario_model');
		$this->load->model('categoria_model');
        $this->load->model('empresa_model');
		$this->load->model('cargo_model');
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function login()
	{
		$this->index();
	}

	public function validate()
	{
		$usuario = $this->input->post('txtUserName');
		$password = $this->input->post('txtPassword');

		$result = $this->usuario_model->validate($usuario, $password);

		if ($result) {

            $sessionData = array(
                'email' => $result[0]->email,
                'usurio' => $result[0]->usuario,
                'cargo' => $result[0]->cargo,
                'login' => true
                );

            $this->session->set_userdata($sessionData);

			$this->principal();
		}else{
			$this->load->view('admin/login');
		}
	}

	public function principal()
	{
        if (($this->session->userdata('login') == true)) {
    		$this->load->view('header');
    		$this->load->view('admin/principal');
    		$this->load->view('footer');
        }else{
            $this->index();
        }
	}

	public function categorias()
	{
        if (($this->session->userdata('login') == true)) {       
    		$data['categorias'] = $this->categoria_model->obtenerCategorias();

    		$this->load->view('header');
    		$this->load->view('admin/header');
    		$this->load->view('admin/categorias', $data);
    		$this->load->view('footer');
        }else{
            $this->index();
        }

	}

	public function empresas()
	{
        if (($this->session->userdata('login') == true)) {       
    		$data['empresas'] = $this->empresa_model->obtenerEmpresas();
            $data['categorias'] = $this->categoria_model->obtenerCategorias();

    		$this->load->view('header');
    		$this->load->view('admin/header');
    		$this->load->view('admin/empresas', $data);
    		$this->load->view('footer');
        }else{
            $this->index();
        }

	}

	public function nuevaempresa()
	{
		$data['categorias'] = $this->categoria_model->obtenerCategorias();

		$this->load->view('header');
		$this->load->view('admin/header');
		$this->load->view('admin/nuevaempresa', $data);
		$this->load->view('footer');
	}

	public function crearempresa()
	{
		// print_r($_REQUEST);
		$datos['txtNombreEmpresa'] = $this->input->post('txtNombreEmpresa');
        $datos['txtRucEmpresa'] = $this->input->post('txtRucEmpresa');
        $datos['cmbCategoriaEmpresa'] = $this->input->post('cmbCategoriaEmpresa');
        $datos['txtRazonSocialEmpresa'] = $this->input->post('txtRazonSocialEmpresa');
        $datos['txtNombreComercialEmpresa'] = $this->input->post('txtNombreComercialEmpresa');
        $datos['txtWebEmpresa'] = $this->input->post('txtWebEmpresa');
        $datos['txtNombreContactoEmpresa'] = $this->input->post('txtNombreContactoEmpresa');
        $datos['txtAPaternoContactoEmpresa'] = $this->input->post('txtAPaternoContactoEmpresa');
        $datos['txtAMaternoContactoEmpresa'] = $this->input->post('txtAMaternoContactoEmpresa');
        $datos['txtCargoEmpresa'] = $this->input->post('txtCargoEmpresa');
        $datos['txtEmailContactoEmpresa'] = $this->input->post('txtEmailContactoEmpresa');
        $datos['txtCelularContactoEmpresa'] = $this->input->post('txtCelularContactoEmpresa');
        $datos['txtTelefonoEmpresa'] = $this->input->post('txtTelefonoEmpresa');
        $datos['txtDirecccionEmpresa'] = $this->input->post('txtDirecccionEmpresa');
        $datos['txtDescripcionEmpresa'] = $this->input->post('txtDescripcionEmpresa');

    // 
		$config['upload_path'] = './assets/uploads/empresas/logo/';
		$config['allowed_types'] = 'jpg|png|pdf|doc|docx';
		// $config['max_size']	= '100';
		// $config['max_width'] = '1024';
		// $config['max_height'] = '768';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('fileLogoEmpresa')) {
        $data = $this->upload->data();
        $logoEmpresa = $data['file_name'];
    }else{
    		$logoEmpresa = '';
    }

    if ($this->upload->do_upload('filePdfEmpresa')) {
        $data = $this->upload->data();
        $pdfEmpresa = $data['file_name'];
    }else{
    		$pdfEmpresa = '';
    }

		$datos['logotipo'] = $logoEmpresa;
		$datos['pdf_link'] = $pdfEmpresa;

    $result = $this->empresa_model->insertarEmpresa($datos);
  	redirect('admin/empresas');
	}

	public function editarempresa()
	{
		$data['idEmpresa'] = $this->uri->segment(3);
		$data['empresa'] = $this->empresa_model->obtenerEmpresa($data['idEmpresa']);
		$data['categorias'] = $this->categoria_model->obtenerCategorias();

		$this->load->view('header');
		$this->load->view('admin/header');
		$this->load->view('admin/editarempresa', $data);
		$this->load->view('footer');
	}

	public function guardarempresa()
	{
		$datos['txtEmpresaId'] = $this->input->post('txtEmpresaId');
		$datos['txtNombreEmpresa'] = $this->input->post('txtNombreEmpresa');
    $datos['txtRucEmpresa'] = $this->input->post('txtRucEmpresa');
    $datos['cmbCategoriaEmpresa'] = $this->input->post('cmbCategoriaEmpresa');
    $datos['txtRazonSocialEmpresa'] = $this->input->post('txtRazonSocialEmpresa');
    $datos['txtNombreComercialEmpresa'] = $this->input->post('txtNombreComercialEmpresa');
    $datos['txtWebEmpresa'] = $this->input->post('txtWebEmpresa');
    $datos['txtNombreContactoEmpresa'] = $this->input->post('txtNombreContactoEmpresa');
    $datos['txtAPaternoContactoEmpresa'] = $this->input->post('txtAPaternoContactoEmpresa');
    $datos['txtAMaternoContactoEmpresa'] = $this->input->post('txtAMaternoContactoEmpresa');
    $datos['txtCargoEmpresa'] = $this->input->post('txtCargoEmpresa');
    $datos['txtEmailContactoEmpresa'] = $this->input->post('txtEmailContactoEmpresa');
    $datos['txtCelularContactoEmpresa'] = $this->input->post('txtCelularContactoEmpresa');
    $datos['txtTelefonoEmpresa'] = $this->input->post('txtTelefonoEmpresa');
    $datos['txtDirecccionEmpresa'] = $this->input->post('txtDirecccionEmpresa');
    $datos['txtDescripcionEmpresa'] = $this->input->post('txtDescripcionEmpresa');


		$config['upload_path'] = './assets/uploads/empresas/logo/';
		$config['allowed_types'] = 'jpg|png|pdf|doc|docx';
		// $config['max_size']	= '100';
		// $config['max_width'] = '1024';
		// $config['max_height'] = '768';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('fileLogoEmpresa')) {
        $data = $this->upload->data();
        $logoEmpresa = $data['file_name'];
    }else{
    		$logoEmpresa = '';
    }

    if ($this->upload->do_upload('filePdfEmpresa')) {
        $data = $this->upload->data();
        $pdfEmpresa = $data['file_name'];
    }else{
    		$pdfEmpresa = '';
    }

		$datos['logotipo'] = $logoEmpresa;
		$datos['pdf_link'] = $pdfEmpresa;




    $result = $this->empresa_model->actualizarempresa($datos);

    redirect('admin/empresas');
	}

	public function eliminarempresa()
	{
		$data['idEmpresa'] = $this->uri->segment(3);
		$this->empresa_model->eliminarEmpresa($data['idEmpresa']);
		// $this->categorias();
		redirect('admin/empresas');
	}

	public function nuevacategoria()
	{
		$this->load->view('header');
		$this->load->view('admin/header');
		$this->load->view('admin/nuevacategoria');
		$this->load->view('footer');
	}

	public function crearcategoria()
	{

		$config['upload_path'] = './assets/uploads/categorias/';
		$config['allowed_types'] = 'jpg|png';
		// $config['max_size']	= '100';
		// $config['max_width'] = '1024';
		// $config['max_height'] = '768';

		$this->load->library('upload', $config);

		$datos['txtNombreCategoria'] = $this->input->post('txtNombreCategoria');

		if ($this->upload->do_upload('fileIconoCategoria')) {
        $data = $this->upload->data();
        $nombreIconoCategoria = $data['file_name'];
    }else{
    		$nombreIconoCategoria = '';
    }

    if ($this->upload->do_upload('fileFondoCategoria')) {
        $data = $this->upload->data();
        $nombreFondoCategoria = $data['file_name'];
    }else{
    		$nombreFondoCategoria = '';
    }

    if ($this->upload->do_upload('fileCabeceraCategoria')) {
        $data = $this->upload->data();
        $nombreCabeceraCategoria = $data['file_name'];
    }else{
    		$nombreCabeceraCategoria = '';
    }

    if ($this->upload->do_upload('fileBtnCategoria')) {
        $data = $this->upload->data();
        $nombreBtnCategoria = $data['file_name'];
    }else{
    		$nombreBtnCategoria = '';
    }

    $datos['icono'] = $nombreIconoCategoria;
    $datos['fondo'] = $nombreFondoCategoria;
    $datos['cabecera'] = $nombreCabeceraCategoria;
    $datos['botonCategoria'] = $nombreBtnCategoria;

		$result = $this->categoria_model->insertarCategoria($datos);
		// $this->categorias();
		redirect('admin/categorias');
	}

	public function editarcategoria()
	{
		$data['idCategoria'] = $this->uri->segment(3);
		$data['categoria'] = $this->categoria_model->obtenerCategoria($data['idCategoria']);
        $data['categoria_detalle'] = $this->categoria_model->obtenerCategoriaDetalles($data['idCategoria']);

		$this->load->view('header');
		$this->load->view('admin/header');
		$this->load->view('admin/editarcategoria', $data);
		$this->load->view('footer');

	}

	public function guardarcategoria()
	{

		$datos['txtCategoriaId'] = $this->input->post('txtCategoriaId');
		$datos['txtNombreCategoria'] = $this->input->post('txtNombreCategoria');

		$config['upload_path'] = './assets/uploads/categorias/';
		$config['allowed_types'] = 'jpg|png';
		// $config['max_size']	= '100';
		// $config['max_width'] = '1024';
		// $config['max_height'] = '768';

		$this->load->library('upload', $config);

		$datos['txtNombreCategoria'] = $this->input->post('txtNombreCategoria');

		if ($this->upload->do_upload('fileIconoCategoria')) {
        $data = $this->upload->data();
        $nombreIconoCategoria = $data['file_name'];
    }else{
    		$nombreIconoCategoria = '';
    }

    if ($this->upload->do_upload('fileFondoCategoria')) {
        $data = $this->upload->data();
        $nombreFondoCategoria = $data['file_name'];
    }else{
    		$nombreFondoCategoria = '';
    }

    if ($this->upload->do_upload('fileCabeceraCategoria')) {
        $data = $this->upload->data();
        $nombreCabeceraCategoria = $data['file_name'];
    }else{
    		$nombreCabeceraCategoria = '';
    }

    if ($this->upload->do_upload('fileBtnCategoria')) {
        $data = $this->upload->data();
        $nombreBtnCategoria = $data['file_name'];
    }else{
    		$nombreBtnCategoria = '';
    }

    $datos['icono'] = $nombreIconoCategoria;
    $datos['fondo'] = $nombreFondoCategoria;
    $datos['cabecera'] = $nombreCabeceraCategoria;
    $datos['botonCategoria'] = $nombreBtnCategoria;

		$result = $this->categoria_model->actualizarcategoria($datos);
		// $this->categorias();
		redirect('admin/categorias');
	}

	public function eliminarcategoria()
	{
		$data['idCategoria'] = $this->uri->segment(3);
		$data['categoria'] = $this->categoria_model->eliminarCategoria($data['idCategoria']);
		// $this->categorias();
		redirect('admin/categorias');
	}

    /*   USUARIOS   */
    public function usuarios()
    {
        $data['usuarios'] = $this->usuario_model->obtenerUsuarios();

        $this->load->view('header');
        $this->load->view('admin/header');
        $this->load->view('admin/usuarios', $data);
        $this->load->view('footer');
    }

    public function nuevousuario()
    {
        $data['cargos'] = $this->cargo_model->obtenerCargos();

        $this->load->view('header');
        $this->load->view('admin/header');
        $this->load->view('admin/nuevousuario', $data);
        $this->load->view('footer');
    }

    public function crearusuario()
    {
        $datos = array(
            'usuario' => $this->input->post('txtUsuario'),
            'nombre' => $this->input->post('txtNombreUsuario'),
            'apellido' => $this->input->post('txtApellidoUsuario'),
            'clave' => $this->input->post('txtClave'),
            'email' => $this->input->post('txtEmailUsuario'),
            'cargo_id' => $this->input->post('cmdCargoUsuario')
            );

        $this->usuario_model->insertarUsuario($datos);

        redirect('admin/usuarios');

    }

    public function editarusuario()
    {
        $data['idUsuario'] = $this->uri->segment(3);
        $data['usuario'] = $this->usuario_model->obtenerUsuario($data['idUsuario']);
        $data['cargos'] = $this->cargo_model->obtenerCargos();

        $this->load->view('header');
        $this->load->view('admin/header');
        $this->load->view('admin/editarusuario', $data);
        $this->load->view('footer');
    }

    public function guardarusuario()
    {
        $id = $this->input->post('txtUsuarioId');
        $datos = array(
            'usuario' => $this->input->post('txtUsuario'),
            'nombre' => $this->input->post('txtNombreUsuario'),
            'apellido' => $this->input->post('txtApellidoUsuario'),
            'clave' => $this->input->post('txtClave'),
            'email' => $this->input->post('txtEmailUsuario'),
            'cargo_id' => $this->input->post('cmdCargoUsuario')
            );
        $this->usuario_model->actualizarUsuario($id, $datos);
        redirect('admin/usuarios');

    }

    public function eliminarusuario()
    {
        $data['idUsuario'] = $this->uri->segment(3);
        $this->usuario_model->eliminarUsuario($data['idUsuario']);
        redirect('admin/usuarios');
    }


    public function empresasxcategoria()
    {
        if (($this->session->userdata('login') == true)) {
            $data['idCategoria'] = $this->uri->segment(3);
            $data['empresas'] = $this->empresa_model->obtenerEmpresasXCategoria($data['idCategoria']);
            $data['categorias'] = $this->categoria_model->obtenerCategorias();

            $this->load->view('header');
            $this->load->view('admin/header');
            $this->load->view('admin/empresas', $data);
            $this->load->view('footer');
        }else{
            $this->index();
        }
    }

	public function logout()
	{
        $this->session->sess_destroy();
		redirect('principal');
	}


}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */