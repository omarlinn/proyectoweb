<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class After extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('afterlogin/principal');
  }

  function service(){
    $this->load->view('site/service');
  }

  function contact(){
    $this->load->view('site/contact');
  }

  function Privacy(){
    $this->load->view('site/privacy');
  }
  function Principal(){
    $this->load->view('site/principal');
  }

  function search(){
    $this->load->view('site/search');
  }

  function About(){
    $this->load->view('site/about');
  }

}
