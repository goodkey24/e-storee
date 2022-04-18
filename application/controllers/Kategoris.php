<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategoris extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      date_default_timezone_set("Asia/Jakarta");
      cek_session('admin');
      $this->load->model('kategori');
   }

   function index()
   {
      $data['result'] = $this->kategori->get_data();
      $this->template->view('template_admin', 'kategori/kategori', $data);
   }

   function add()
   {

      $data['result'] = $this->kategori->get_data();
      $this->template->view('template_admin', 'kategori/add_kategori', $data);
   }

   function proses()
   {
      $this->db->trans_start();
      $kategoriid            = empty($this->input->post('kategoriid')) ? "" : $this->input->post('kategoriid');
      $nama                  = $this->input->post('nama');

      $return_data = array(
         'nama'            => $nama,
      );

      if ($kategoriid == "") {
         $kategoriid = $this->global_model->insert_return_id('kategori', $return_data);
         $this->db->trans_complete();
         $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-info text-white border-0" role="alert">
            Data<strong> Kategori</strong> Berhasil Ditambah!</div>');
      } else {
         $this->global_model->update('kategori', $return_data, array('id' => $kategoriid));
         $this->db->trans_complete();
         $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-warning text-white border-0" role="alert">
            Data <strong>Kategori </strong> Berhasil Diubah!</div>');
      }
      redirect('kategoris/');
   }

   function edit($id)
   {
      $data['kategoriid'] = $id;
      $result    = $this->global_model->get('kategori', '*', array('id' => $id), true);
      $data['result']    = $result;

      $this->template->view('template_admin', 'kategori/edit_kategori', $data);
   }

   function remove($id)
   {
      $this->global_model->delete('kategori', array('id' => $id));
      $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-danger text-white border-0" role="alert">
        Data <strong>Kategori </strong> Berhasil Dihapus!</div>');
      echo "<script>window.history.go(-1);</script>";
   }
}
