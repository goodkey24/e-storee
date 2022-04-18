<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_users extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('pemesanan_user'));
    $this->load->model(array('kategori_frontend'));
  }

  public function index()
  {
    $data['kategori'] = $this->kategori_frontend->ambil();

    $data['pelangganid'] = $this->session->userdata('pelangganid');
    $data['result'] = $this->pemesanan_user->get_data();


    $this->template->view('template_frontend', 'pemesanan_user', $data);
  }

  function detail($id = "")
  {
    $data['kategori'] = $this->kategori_frontend->ambil();

    $data['result'] = $this->pemesanan_user->ambil($id);
    $data['result'] = $this->pemesanan_user->get_data_perlimit();

    $this->template->view('template_frontend', 'detail_pemesanan', $data);
  }
}
