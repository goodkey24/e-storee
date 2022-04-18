<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkouts extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('kategori_frontend'));
    $this->load->model(array('checkout'));
  }
  function index($id = "")
  {

    $data['checkout'] = $this->checkout->get_checkout($id);
    $data['kategori'] = $this->kategori_frontend->ambil();  // $data['kategori'] = $this->utama->get_data_kategori();
    $this->template->view('template_frontend', 'checkout', $data);
  }

  function tambah()
  {
    $this->db->trans_start();
    $barangid     = empty($this->input->post('barangid')) ? "" : $this->input->post('barangid');
    $kategoriid     = $this->input->post('kategoriid');
    $kuantitas    = $this->input->post('kuantitas');
    $harga        = $this->input->post('harga');

    $insert_data = array(
      'barangid'            => $barangid,
      'kategoriid'          => $kategoriid,
      'kuantitas'           => $kuantitas,
      'harga'               => $harga
    );
    $barangid = $this->global_model->insert_return_id('checkout', $insert_data);
    $this->db->trans_complete();
    redirect('checkouts/');
  }
}
