<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('Despues/nav');
    $this->load->view('role/candidato');
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
       $this->load->view('role/Candidato');
      $this->load->view('Despues/footer');  }

  function search(){
     $this->load->view('Despues/nav');
      $this->load->view('site/search');
      $this->load->view('Despues/footer');  }

  function About(){
    $this->load->view('Despues/nav');
     $this->load->view('site/about');
    $this->load->view('Despues/footer');  }


  }
