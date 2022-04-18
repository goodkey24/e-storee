<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barangs extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set("Asia/Jakarta");
    cek_session('admin');
    $this->load->model('barang');
  }

  public function index()
  {
    $data['result'] = $this->barang->get_data();
    $this->template->view('template_admin', 'barang/barang', $data);
  }
  public function add_barang()
  {
    $data['kategoriid'] = dropdown_kategori();
    $data['status'] = config_item('status');

    $this->template->view('template_admin', 'barang/add_barang', $data);
  }
  public function proses_add()
  {
    $this->db->trans_start();
    $nama_brg    = $this->input->post('nama_brg');
    $kategoriid  = $this->input->post('kategoriid');
    $stok        = $this->input->post('stok');
    $tgl         = explode_tanggal_datepicker($this->input->post('tgl'));
    $status      = $this->input->post('status');
    $harga       = str_replace(",", "", $this->input->post('harga'));
    $deskripsi   = $this->input->post('deskripsi');
    $hargadiskon = str_replace(",", "", $this->input->post('hargadiskon'));

    $insert_data = array(
      'nama_brg'        => $nama_brg,
      'kategoriid'      => $kategoriid,
      'stok'            => $stok,
      'tgl'             => $tgl,
      'status'          => $status,
      'harga'           => $harga == "" ? 0 : $harga,
      'deskripsi'       => $deskripsi,
      'hargadiskon'     => $hargadiskon == "" ? 0 : $hargadiskon
    );
    $ambil = $this->global_model->insert_return_id('barang', $insert_data);

    if ($ambil > 0) {
      $config['upload_path'] = './asset/g_barang/';
      $config['allowed_types'] = 'gif|GIF|jpg|JPG|png|PNG|jpeg|JPEG';
      $config['file_name'] = time();
      $this->upload->initialize($config);
      $gambar = "no-image.png";
      if ($this->upload->do_upload('gambar')) {
        $gambar = $this->upload->data('file_name');

        $update_data = array(
          'gambar' => $gambar
        );
        $this->global_model->update('barang', $update_data, array('id' => $ambil));
      }
      $this->db->trans_complete();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-info text-white border-0" role="alert">
            Data<strong> Barang </strong> Berhasil Ditambah!</div>');
      redirect('barangs/');
    }
  }
  public function edit_barang($id)
  {
    $data['status'] = config_item('status');
    $data['kategoriid'] = dropdown_kategori();
    $data['barangid'] = $id;
    $result = $this->global_model->get('barang', '*', array('id' => $id), true);
    $data['gambar'] = config_item('base_url') . "asset/g_barang/" . $result['gambar'];
    $data['result'] = $result;
    $this->template->view('template_admin', 'barang/edit_barang', $data);
  }
  public function proses_edit()
  {
    $this->db->trans_start();
    $barangid    = $this->input->post('barangid');
    $nama_brg    = $this->input->post('nama_brg');
    $kategoriid  = $this->input->post('kategoriid');
    $stok        = $this->input->post('stok');
    $tgl         = explode_tanggal_datepicker($this->input->post('tgl'));
    $status      = $this->input->post('status');
    $harga       = str_replace(",", "", $this->input->post('harga'));
    $deskripsi   = $this->input->post('deskripsi');
    $hargadiskon = str_replace(",", "", $this->input->post('hargadiskon'));

    $update_data = array(
      'nama_brg'        => $nama_brg,
      'kategoriid'      => $kategoriid,
      'stok'            => $stok,
      'tgl'             => $tgl,
      'status'          => $status,
      'harga'           => $harga == "" ? 0 : $harga,
      'deskripsi'       => $deskripsi,
      'hargadiskon'     => $hargadiskon == "" ? 0 : $hargadiskon
    );
    $result = $this->global_model->get('barang', '*', array('id' => $barangid), true);
    $hapus = $this->global_model->get_row("barang", array("gambar"), array('id' => $barangid), true)->gambar;
    unlink("./asset/g_barang/" . $hapus);
    if ($hapus) {
      $config['upload_path'] = './asset/g_barang/';
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
    $this->global_model->update('barang', $update_data, array('id' => $barangid));
    $this->db->trans_complete();
    $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-warning text-white border-0" role="alert">
        Data <strong> Barang </strong> Berhasil Diubah!</div>');
    redirect('barangs/');
  }
  public function remove($id)
  {
    $result = $this->global_model->get('barang', '*', array('id' => $id), true);
    unlink("./asset/g_barang/" . $result['gambar']);

    $this->global_model->delete('barang', array('id' => $id));
    $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-danger text-white border-0" role="alert">
        Data <strong>Barang </strong> Berhasil Dihapus!</div>');
    echo "<script>window.history.go(-1);</script>";
  }
}
