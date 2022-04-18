<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function get_data($barangid = "")
  {
    $this->db->select('barang.*,(SELECT nama FROM kategori WHERE kategori.id = barang.kategoriid) as namakategori');
    $this->db->from('barang');
    if ($barangid != "") {
      $this->db->where('barang.id', $barangid);
    }
    $this->db->order_by('barang.id', 'asc');

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      if ($barangid == "") {
        return $query->result_array();
      } else {
        return $query->row_array();
      }
    } else {
      return NULL;
    }
  }
}
