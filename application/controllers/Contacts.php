<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contacts extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('kategori_frontend'));
  }


  public function index()
  {
    $data['kategori'] = $this->kategori_frontend->ambil();

    $this->template->view('template_frontend', 'contact', $data);
  }
}
