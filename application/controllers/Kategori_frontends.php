<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_frontends extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('kategori_frontend'));
  }

  function index()
  {

    $data['kategori'] = $this->kategori_frontend->ambil();

    $this->template->view('template_frontend', 'kategori_frontend', $data);
  }
}
