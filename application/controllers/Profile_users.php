<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_users extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->model('profile_user');
    $this->load->model(array('kategori_frontend'));
  }
  function index()
  {

    $data['kategori'] = $this->kategori_frontend->ambil(); // assignment variable kategori home

    $pelangganid = $this->session->userdata('pelangganid');
    $result = $this->global_model->get('user', '*', array('id' => $pelangganid), true);
    $data['result'] = $result;
    $this->template->view('template_frontend', 'profile_user', $data);
  }

  // Mempassing Data ke view detail_user
  function detail_user()
  {
    $data['kategori'] = $this->kategori_frontend->ambil();  // assignment variable kategori home
    $data['jk']       = config_item('jk');
    $pelangganid      = $this->session->userdata('pelangganid');
    $result           = $this->global_model->get('user', '*', array('id' => $pelangganid), true);
    $data['result'] = $result;
    $this->template->view('template_frontend', 'detail_user', $data);
  }
  // =====
  function proses()
  {
    $this->db->trans_start();
    $pelangganid        = empty($this->input->post('pelangganid')) ? "" : $this->input->post('pelangganid');
    $nama               = $this->input->post('nama');
    $jk                 = $this->input->post('jk');
    $alamat             = $this->input->post('alamat');
    $email              = $this->input->post('email');
    $username           = $this->input->post('username');
    $password           = $this->input->post('password');

    $return_data = array(
      'nama'            => $nama,
      'jk'              => $jk,
      'alamat'          => $alamat,
      'email'           => $email,
      'username'        => $username,
      'password'        => MD5($password),
      'password_hid'    => $password,
      'level'           => 'user'
    );
    $password = $this->input->post('password');
    if ($this->profile_user->cek_data('email', $email, $pelangganid) > 0) {
      $this->session->set_flashdata('pesan', "<div class='alert alert-danger' role='alert'>Email" . $email . "Sudah tersedia...</div>");
      redirect('profile_users/detail_user');
      die();
    } else if ($this->input->post('password') != "") {
      $return_data += array(
        'password' => MD5($password),
        'password_hid' => $password
      );
    }
    $this->global_model->update('user', $return_data, array('id' => $pelangganid));
    $this->db->trans_complete();
    $this->session->set_flashdata('pesan', "<div class='alert alert-success' role='alert'>Data Sudah diperbaharui</div>");
    redirect('profile_users/detail_user');
  }
}
