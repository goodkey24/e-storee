<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_produks extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('kategori_produk'));
    $this->load->model(array('kategori_frontend'));
  }
  function index($id = "")
  {
    $data['kategori'] = $this->kategori_frontend->ambil();
    $data['result'] = $this->kategori_produk->ambil_kategori($id);

    $this->template->view('template_frontend', 'kategori_frontend', $data);
  }
}
