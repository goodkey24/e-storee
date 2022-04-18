<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admins extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      date_default_timezone_set("Asia/Jakarta");
      cek_session('admin');
      $this->load->model('admin');
   }

   public function index()
   {
      $data['result'] = $this->admin->get_data();
      $this->template->view('template_admin', 'admin/admin', $data);
   }
   public function add_admin()
   {
      $this->template->view('template_admin', 'admin/add_admin');
   }
   public function proses_add()
   {
      $this->db->trans_start();
      $nama    = $this->input->post('nama');
      $username  = $this->input->post('username');
      $password      = $this->input->post('password');

      $insert_data = array(
         'nama'         => $nama,
         'username'     => $username,
         'password'     => MD5($password),
         'password_hid' => $password,
         'level'        => 'admin'
      );

      if ($this->admin->cek_data('username', $username) > 0) {
         $this->session->set_flashdata('pesan', "<div class='alert alert-danger' role='alert'>Username " . $username . " sudah tersedia...</div>");
         redirect('admins/add_admin');
         die();
      }

      $ambil = $this->global_model->insert_return_id('admin', $insert_data);
      if ($ambil > 0) {
         $config['upload_path'] = './asset/g_admin/';
         $config['allowed_types'] = 'gif|GIF|jpg|JPG|png|PNG|jpeg|JPEG';
         $config['file_name'] = time();
         $this->upload->initialize($config);
         $gambar = "no-image.png";
         if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data('file_name');

            $update_data = array(
               'gambar' => $gambar
            );
            $this->global_model->update('admin', $update_data, array('id' => $ambil));
         }
         $this->db->trans_complete();
         $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-info text-white border-0" role="alert">
            Data<strong> Admin </strong> Berhasil Ditambah!</div>');
         redirect('admins/');
      }
   }
   public function edit_admin($id)
   {

      $result = $this->global_model->get('admin', '*', array('id' => $id), true);
      $data['adminid'] = $id;
      $data['gambar'] = config_item('base_url') . "asset/g_admin/" . $result['gambar'];
      $data['result'] = $result;
      $this->template->view('template_admin', 'admin/edit_admin', $data);
   }
   public function proses_edit()
   {
      $this->db->trans_start();
      $adminid = $this->input->post('adminid');
      $nama               = $this->input->post('nama');
      $username            = $this->input->post('username');
      $password            = $this->input->post('password');

      $update_data = array(
         'nama'                  => $nama,
         'username'              => $username,
         'password'              => MD5($password),
         'password_hid'          => $password,
         'level'                 => 'admin'
      );

      $result = $this->global_model->get('admin', '*', array('id' => $adminid), true);
      $hapus = $this->global_model->get_row("admin", array("gambar"), array('id' => $adminid), true)->gambar;
      unlink("./asset/g_admin/" . $hapus);      // first method to delete image from directory when image change
      if ($hapus) {
         $config['upload_path'] = './asset/g_admin/';
         $config['allowed_types'] = 'gif|GIF|jpg|JPG|png|PNG|jpeg|JPEG';
         $config['file_name'] = time();
         $config['file_name'] = $result['file_name'];
         $this->upload->initialize($config);
         if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data('file_name');
            $update_data += array(
               'gambar' => $gambar,
            );
         }
      }
      if ($this->admin->cek_data('username', $username, $adminid) > 0) {
         $this->session->set_flashdata('pesan', "<div class='alert alert-danger' role='alert'>Username " . $username . " sudah tersedia...</div>");
         redirect('admins/');
         die();
      }
      $this->global_model->update('admin', $update_data, array('id' => $adminid));
      $this->db->trans_complete();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-warning text-white border-0" role="alert">
        Data <strong> Admin</strong> Berhasil Diubah!</div>');
      redirect('admins/');
   }
   public function remove($id)
   {
      $result = $this->global_model->get('admin', '*', array('id' => $id), true);
      unlink("./asset/g_admin/" . $result['gambar']);

      $this->global_model->delete('admin', array('id' => $id));
      $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-danger text-white border-0" role="alert">
        Data <strong>Admin </strong> Berhasil Dihapus!</div>');
      echo "<script>window.history.go(-1);</script>";
   }
}
