<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanans extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set("Asia/Jakarta");
    cek_session('admin');
    $this->load->model('pemesanan');
  }

  public function index()
  {
    $data['result'] = $this->pemesanan->get_data();
    $this->template->view('template_admin', 'pemesanan/pemesanan', $data);
  }
  public function add_pemesanan()
  {
    $data['pelangganid'] = dropdown_pelanggan();
    $data['barangid'] = dropdown_barang();
    $data['kategoriid'] = dropdown_kategori();
    $data['status_brg'] = config_item('status_brg');

    $this->template->view('template_admin', 'pemesanan/add_pemesanan', $data);
  }
  public function proses_add()
  {
    $this->db->trans_start();
    $pelangganid      = $this->input->post('pelangganid');
    $barangid         = $this->input->post('barangid');
    $kategoriid       = $this->input->post('kategoriid');
    $tanggalpesan     = explode_tanggal_datepicker($this->input->post('tanggalpesan'));
    $jmlpesan      = $this->input->post('jmlpesan');
    $harga            = $this->input->post('harga');
    $status           = $this->input->post('status');

    $insert_data = array(
      'pelangganid'        => $pelangganid,
      'barangid'           => $barangid,
      'kategoriid'         => $kategoriid,
      'tanggalpesan'       => $tanggalpesan,
      'jmlpesan'           => $jmlpesan,
      'harga'              => $harga,
      'status'             => $status
    );
    $ambil = $this->global_model->insert_return_id('pemesanan', $insert_data);

    if ($ambil > 0) {
      $config['upload_path'] = './asset/g_pemesanan/';
      $config['allowed_types'] = 'gif|GIF|jpg|JPG|png|PNG|jpeg|JPEG';
      $config['file_name'] = time();
      $this->upload->initialize($config);
      $gambar = "no-image.png";
      if ($this->upload->do_upload('gambar')) {
        $gambar = $this->upload->data('file_name');

        $update_data = array(
          'gambar' => $gambar
        );
        $this->global_model->update('pemesanan', $update_data, array('id' => $ambil));
      }
      $this->db->trans_complete();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-info text-white border-0" role="alert">
            Data<strong> Pemesanan </strong> Berhasil Ditambah!</div>');
      redirect('pemesanans/');
    }
  }
  public function edit_pemesanan($id)
  {
    $data['pemesananid'] = $id;
    $data['pelangganid'] = dropdown_pelanggan();
    $data['barangid'] = dropdown_barang();
    $data['kategoriid'] = dropdown_kategori();
    $data['status_brg'] = config_item('status_brg');
    $result = $this->global_model->get('pemesanan', '*', array('id' => $id), true);
    $data['gambar'] = config_item('base_url') . "asset/g_pemesanan/" . $result['gambar'];
    $data['result'] = $result;
    $this->template->view('template_admin', 'pemesanan/edit_pemesanan', $data);
  }
  public function proses_edit()
  {
    $this->db->trans_start();
    $pemesananid    = $this->input->post('pemesananid');
    $pelangganid      = $this->input->post('pelangganid');
    $barangid         = $this->input->post('barangid');
    $kategoriid       = $this->input->post('kategoriid');
    $tanggalpesan     = explode_tanggal_datepicker($this->input->post('tanggalpesan'));
    $jmlpesan      = $this->input->post('jmlpesan');
    $harga            = $this->input->post('harga');
    $status         = $this->input->post('status');

    $update_data = array(
      'pelangganid'     => $pelangganid,
      'barangid'        => $barangid,
      'kategoriid'      => $kategoriid,
      'tanggalpesan'    => $tanggalpesan,
      'jmlpesan'        => $jmlpesan,
      'harga'           => $harga,
      'status'          => $status
    );
    $result = $this->global_model->get('pemesanan', '*', array('id' => $pemesananid), true);
    if ($_FILES['gambar']['name'] != "") {
      unlink("./asset/g_pemesanan/" . $result['gambar']);   // other method to delete image from directory when image change
      $config['upload_path'] = './asset/g_pemesanan/';
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
    $this->global_model->update('pemesanan', $update_data, array('id' => $pemesananid));
    $this->db->trans_complete();
    $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-warning text-white border-0" role="alert">
        Data <strong> Pemesanan </strong> Berhasil Diubah!</div>');
    redirect('pemesanans/');
  }
  public function remove($id)
  {
    $result = $this->global_model->get('admin', '*', array('id' => $id), true);
    unlink("./asset/g_pemesanan/" . $result['gambar']);

    $this->global_model->delete('pemesanan', array('id' => $id));
    $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-danger text-white border-0" role="alert">
        Data <strong> Pemesanan </strong> Berhasil Dihapus!</div>');
    echo "<script>window.history.go(-1);</script>";
  }
}
