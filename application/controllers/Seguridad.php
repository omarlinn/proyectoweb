<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad extends CI_Controller {

public function __construct()
{  define('NOLOGIN', true);
  parent::__construct();
  	$this->load->helper('url');
  $this->load->model('Usuario_model');

}


	public function index()
	{
$this->load->view('inicio/login');

	}

  function salir(){
    session_destroy();
    redirect('Seguridad');
  }

  function login(){

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

  $tmp = $this->usuario_model->iniciarSession($usuario, $clave);
    if($tmp !== false){
      $_SESSION['usuario'] = $tmp;
      redirect('Site');
    }else {
      $this->load->view('usuario/error');
    }
  }

}
