<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrations extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    date_default_timezone_set("Asia/Jakarta");
    $this->load->model(array('registration'));
    $this->load->model(array('kategori_frontend'));
  }
  function index()
  {
    $data['kategori'] = $this->kategori_frontend->ambil();

    $data['jk'] = config_item('jk');
    $data['result'] = $this->registration->get_data();
    $this->template->view('template_frontend', 'registration', $data);
  }

  function proses()
  {
    $this->db->trans_start();
    $userid     = empty($this->input->post('userid')) ? "" : $this->input->post('userid');
    $nama       = $this->input->post('nama');
    $jk         = $this->input->post('jk');
    $alamat     = $this->input->post('alamat');
    $email      = $this->input->post('email');
    $username   = $this->input->post('username');
    $password   = $this->input->post('password');

    $return_data = array(
      'nama'          => $nama,
      'jk'            => $jk,
      'alamat'        => $alamat,
      'email'         => $email,
      'username'      => $username,
      'password'      => MD5($password),
      'password_hid'  => $password,
      'level'         => 'user'
    );
    if ($userid == "") {
      if ($this->registration->cek_data('email', $email) > 0) {
        $this->session->set_flashdata('pesan', "<div class='alert alert-danger' role='alert'>Username " . $email . " sudah tersedia...</div>");
        redirect('registrations/');
        die();
      }
      $userid = $this->global_model->insert_return_id('user', $return_data);
      $this->db->trans_complete();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-info text-white border-0" role="alert">
      Registrasi<strong></strong> Berhasil! Silahkan Login </div>');
      redirect('login_users');
    }
  }
}
