<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profiles extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    cek_session();
    $this->load->model('admin');
  }

  function index()
  {
    $adminid = $this->session->userdata('adminid');
    $result = $this->global_model->get('admin', '*', array('id' => $adminid), true);
    $data['result'] = $result;

    $this->template->view('template_admin', 'profile', $data);
  }
  function proses()
  {
    $this->db->trans_start();
    $adminid = $this->session->userdata('adminid');
    $nama = $this->input->post('nama');
    $username = $this->input->post('username');

    $return_data = array(
      'nama'        => $nama,
      'username'    => $username
    );
    $password = $this->input->post('password');
    if ($this->admin->cek_data('username', $username, $adminid) > 0) {
      $this->session->set_flashdata('pesan', "<div class='alert alert-danger' role='alert'>Username " . $username . " sudah tersedia...</div>");
      redirect('profiles/');
      die();
    } else if ($this->input->post('password') != "") {
      $return_data += array(
        'password' => MD5($password),
        'password_hid' => $password,
      );
    }
    $this->global_model->update('admin', $return_data, array('id' => $adminid));
    $this->db->trans_complete();
    $this->session->set_flashdata('pesan', "<div class='alert alert-success' role='alert'>Data Sudah diperbaharui</div>");
    redirect('profiles/');
  }
  function proses_gambar()
  {
    $this->db->trans_start();
    $adminid  = $this->input->post('adminid');

    $hapus = $this->global_model->get_row("admin", array("gambar"), array('id' => $adminid), true)->gambar;
    unlink("./asset/g_admin/" . $hapus);
    if ($hapus) {
      // Upload Gambar
      $config['upload_path']   = './asset/g_admin/';
      $config['allowed_types'] = 'gif|GIF|jpg|JPG|png|PNG|jpeg|JPEG';
      $config['file_name']   = time();
      $this->upload->initialize($config);
      $gambar = NULL;
      if ($this->upload->do_upload('gambar')) {
        $gambar = $this->upload->data('file_name');
      }

      $this->global_model->update('admin', array('gambar' => $gambar), array('id' => $adminid));
      $this->db->trans_complete();
      $this->session->set_flashdata('pesan', "<div class='alert alert-success' role='alert'>Gambar Sudah diperbaharui</div>");
    }
    redirect('profiles/');
  }
}
