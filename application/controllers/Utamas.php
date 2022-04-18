<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utamas extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('utama'));
    $this->load->model(array('kategori_frontend'));
  }
  public function index()
  {
    $data['result'] = $this->utama->get_data();
    $data['kategori'] = $this->kategori_frontend->ambil();  // $data['kategori'] = $this->utama->get_data_kategori();

    $this->template->view('template_frontend', 'home_frontend', $data);
  }
  function detail($id = "")
  {
    $data['kategori'] = $this->kategori_frontend->ambil();  // $data['kategori'] = $this->utama->get_data_kategori();


    $data['result'] = $this->utama->get_data_perlimit();
    $data['result'] = $this->utama->ambil($id);

    $this->template->view('template_frontend', 'detail_barang', $data);
  }
}
