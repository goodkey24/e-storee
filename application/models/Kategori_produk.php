<?php
if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Kategori_produk extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  function ambil_kategori($id = "")
  {
    $this->db->select('
        barang.id,
        barang.nama_brg,
        barang.gambar,
        barang.stok,
        barang.tgl,
        barang.status,
        barang.harga,
        barang.hargadiskon,
        barang.deskripsi,
        kategori.nama,
        ');
    $this->db->select('barang.*,(SELECT nama FROM kategori WHERE kategori.id = barang.kategoriid) as namakategori');
    $this->db->from('barang');
    $this->db->join('kategori', 'kategori.id = barang.kategoriid', 'left');
    if ($id != "") {
      $this->db->where('barang.kategoriid', $id);
    }

    $this->db->order_by('kategori.nama', 'desc');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return NULL;
    }
  }
}
