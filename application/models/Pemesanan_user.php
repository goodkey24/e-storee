<?php
if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Pemesanan_user extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  function get_data($pelangganid = "")
  {

    $pelangganid = $pelangganid == "" ? $this->session->userdata('pelangganid') : $pelangganid;

    $this->db->select('pemesanan.*,
    (SELECT nama FROM user WHERE user.id = pemesanan.pelangganid) as namapelanggan,
    (SELECT nama_brg FROM barang WHERE barang.id = pemesanan.barangid) as namabarang,
    (SELECT harga FROM barang WHERE barang.id = pemesanan.hargaid) as hargabarang,
    (SELECT gambar FROM barang WHERE barang.id = pemesanan.gambarid) gambarbrg,
    (SELECT nama FROM kategori WHERE kategori.id = pemesanan.kategoriid) as namakategori,
    (SELECT username FROM user WHERE user.id = pemesanan.usernameid ) as usernamepel,
    (SELECT jk FROM user WHERE user.id = pemesanan.jkid ) jkpel,
    (SELECT alamat FROM user WHERE user.id = pemesanan.alamatid ) as alamatpel
    ');
    $this->db->from('pemesanan');
    if ($pelangganid != "") {
      $this->db->where('pemesanan.pelangganid', $pelangganid);
    }

    $this->db->order_by('pemesanan.id', 'DESC');

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return NULL;
    }
  }

  // Function Detail Pemesanan
  public function ambil($where = "")
  {
    $this->db->select('pemesanan.*,
    (SELECT nama FROM user WHERE user.id = pemesanan.pelangganid) as namapelanggan,
    (SELECT nama_brg FROM barang WHERE barang.id = pemesanan.barangid) as namabarang,
    (SELECT harga FROM barang WHERE barang.id = pemesanan.hargaid) as hargabarang,
    (SELECT gambar FROM barang WHERE barang.id = pemesanan.gambarid) gambarbrg,
    (SELECT nama FROM kategori WHERE kategori.id = pemesanan.kategoriid) as namakategori,
    (SELECT username FROM user WHERE user.id = pemesanan.usernameid ) as usernamepel,
    (SELECT jk FROM user WHERE user.id = pemesanan.jkid ) jkpel,
    (SELECT alamat FROM user WHERE user.id = pemesanan.alamatid ) as alamatpel
    ');
    $this->db->from('pemesanan');
    if ($where != "") {
      $this->db->where('pemesanan.id', $where);
    }
    $this->db->order_by('pemesanan.id', 'DESC');
    $data = $this->db->get();
    if ($data->num_rows() > 0) {
      if ($where != "") {
        return $data->row_array();
      } else {
        return $data->result_array();
      }
    } else {
      return NULL;
    }
  }

  public function get_data_perlimit($pemesananid = "")
  {
    $this->db->select('pemesanan.*,
    (SELECT nama FROM user WHERE user.id = pemesanan.pelangganid) as namapelanggan,
    (SELECT nama_brg FROM barang WHERE barang.id = pemesanan.barangid) as namabarang,
    (SELECT harga FROM barang WHERE barang.id = pemesanan.hargaid) as hargabarang,
    (SELECT gambar FROM barang WHERE barang.id = pemesanan.gambarid) gambarbrg,
    (SELECT nama FROM kategori WHERE kategori.id = pemesanan.kategoriid) as namakategori,
    (SELECT username FROM user WHERE user.id = pemesanan.usernameid ) as usernamepel,
    (SELECT jk FROM user WHERE user.id = pemesanan.jkid ) jkpel,
    (SELECT alamat FROM user WHERE user.id = pemesanan.alamatid ) as alamatpel
    ');
    $this->db->from('pemesanan');
    if ($pemesananid != "") {
      $this->db->where('pemesanan.id', $pemesananid);
    }
    $this->db->order_by('pemesanan.id', 'ASC');

    $this->db->limit(10);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      if ($pemesananid = "") {
        return $query->result_array();
      } else {
        return $query->row_array();
      }
    } else {
      return NULL;
    }
  }
}
