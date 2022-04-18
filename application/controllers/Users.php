<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    date_default_timezone_set("Asia/Jakarta");
    cek_session('admin');
    $this->load->model('user');
  }

  function index()
  {
    $data['result'] = $this->user->get_data();
    $this->template->view('template_admin', 'user/user', $data);
  }

  function add()
  {
    $data['jk'] = config_item('jk');
    $data['result'] = $this->user->get_data();
    $this->template->view('template_admin', 'user/add_user', $data);
  }

  function proses()
  {
    $this->db->trans_start();
    $userid            = empty($this->input->post('userid')) ? "" : $this->input->post('userid');
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

    if ($userid == "") {
      if ($this->user->cek_data('username', $username) > 0) {
        $this->session->set_flashdata('pesan', "<div class='alert alert-danger' role='alert'>Username " . $username . " sudah tersedia...</div>");
        redirect('users/add');
        die();
      }
      $userid = $this->global_model->insert_return_id('user', $return_data);
      $this->db->trans_complete();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-info text-white border-0" role="alert">
            Data<strong> user</strong> Berhasil Ditambah!</div>');
    } else {
      if ($this->user->cek_data('username', $username, $userid) > 0) {
        $this->session->set_flashdata('pesan', "<div class='alert alert-danger' role='alert'>Username " . $username . " sudah tersedia...</div>");
        redirect('users/');
        die();
      }
      $this->global_model->update('user', $return_data, array('id' => $userid));
      $this->db->trans_complete();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-warning text-white border-0" role="alert">
            Data <strong>user </strong> Berhasil Diubah!</div>');
    }
    redirect('users/');
  }

  function edit($id)
  {
    $data['jk']         = config_item('jk');
    $data['userid']     = $id;
    $result             = $this->global_model->get('user', '*', array('id' => $id), true);
    $data['result']     = $result;

    $this->template->view('template_admin', 'user/edit_user', $data);
  }

  function remove($id)
  {
    $this->global_model->delete('user', array('id' => $id));
    $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-danger text-white border-0" role="alert">
        Data <strong>user </strong> Berhasil Dihapus!</div>');
    echo "<script>window.history.go(-1);</script>";
  }
}
