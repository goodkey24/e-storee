<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function get_checkout($id = "")
  {

    $this->db->select('checkout.*,
    (SELECT nama FROM kategori WHERE kategori.id = checkout.kategoriid) as namakategori,
    (SELECT nama_brg FROM barang WHERE barang.id = checkout.barangid) as namabarang,
    (SELECT gambar FROM barang WHERE barang.id = checkout.barangid) as gambarbarang
    ');
    $this->db->select('checkout.*,');
    $this->db->from('checkout');
    if ($id != "") {
      $this->db->where('checkout.id', $id);
    }
    $this->db->order_by('checkout.id', 'desc');

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      if ($id == "") {
        return $query->result_array();
      } else {
        return $query->row_array();
      }
    } else NULL;
  }
}
