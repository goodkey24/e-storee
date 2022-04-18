<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pemesanan extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function get_data($pemesananid = "")
  {
    $this->db->select('pemesanan.*,(SELECT nama FROM user WHERE user.id = pemesanan.pelangganid) as namapelanggan');
    $this->db->select('pemesanan.*,(SELECT nama_brg FROM barang WHERE barang.id = pemesanan.barangid) as namabarang');
    $this->db->select('pemesanan.*,(SELECT gambar FROM barang WHERE barang.id = pemesanan.gambarid) as gambarbarang');
    $this->db->select('pemesanan.*,(SELECT harga FROM barang WHERE barang.id = pemesanan.hargaid) as hargabarang');
    $this->db->select('pemesanan.*,(SELECT gambar FROM barang WHERE barang.id = pemesanan.gambarid) as gambarbrg');
    $this->db->select('pemesanan.*,(SELECT nama FROM kategori WHERE kategori.id = pemesanan.kategoriid) as namakategori');
    $this->db->from('pemesanan');
    if ($pemesananid != "") {
      $this->db->where('pemesanan.id', $pemesananid);
    }
    $this->db->order_by('pemesanan.id', 'asc');

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      if ($pemesananid == "") {
        return $query->result_array();
      } else {
        return $query->row_array();
      }
    } else {
      return NULL;
    }
  }
}
