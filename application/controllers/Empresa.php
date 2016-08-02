<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('Despues/nav');
    $this->load->view('role/empresa');
    $this->load->view('Despues/footer');  }

  function service(){
     $this->load->view('Despues/nav');
     $this->load->view('site/service');
       $this->load->view('Despues/footer');  }

  function contact(){
     $this->load->view('Despues/nav');
      $this->load->view('site/contact');
      $this->load->view('Despues/footer');  }

  function Privacy(){
     $this->load->view('Despues/nav');
     $this->load->view('site/privacy');
     $this->load->view('Despues/footer');  }
  function Principal(){
       $this->load->view('Despues/nav');
       $this->load->view('site/principal');
      $this->load->view('Despues/footer');  }

  function search(){
     $this->load->view('Despues/nav');
      $this->load->view('site/search');
      $this->load->view('Despues/footer');  }

  function About(){
    $this->load->view('Despues/nav');
     $this->load->view('site/about');
    $this->load->view('Despues/footer');  }

    function login(){
       $this->load->view('Despues/nav');

      $this->load->view('registro/nav');
       $this->load->view('registro/login');

    $this->load->view('Despues/footer');  }
}
