<?php
if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Utama extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function get_data($barangid = "")
  {
    $this->db->select('barang.*,(SELECT nama FROM kategori WHERE kategori.id = barang.kategoriid) as namakategori');
    $this->db->select('barang.*,');
    $this->db->from('barang');
    if ($barangid != "") {
      $this->db->where('barang.id', $barangid);
    }
    $this->db->order_by('barang.id', 'desc');

    $this->db->limit(10);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      if ($barangid == "") {
        return $query->result_array();
      } else {
        return $query->row_array();
      }
    } else NULL;
  }

  public function ambil($where = "")
  {

    $this->db->select('*');
    $this->db->select('barang.*,(SELECT nama FROM kategori WHERE kategori.id = barang.kategoriid) as namakategori');
    $this->db->from('barang');
    if ($where != "") {
      $this->db->where('barang.id', $where);
    }
    $this->db->order_by('barang.id', 'desc');
    $data = $this->db->get();
    if ($data->num_rows() > 0) {
      if ($where != "") {
        return $data->row_array();
      } else {
        return $data->result_array();
      }
    } else {
      return null;
    }
  }

  public function get_data_perlimit($barangid = "")
  {
    $this->db->select('barang.*,(SELECT nama FROM kategori WHERE kategori.id = barang.kategoriid) as namakategori');
    $this->db->select('barang.*,');
    $this->db->from('barang');
    if ($barangid != "") {
      $this->db->where('barang.id', $barangid);
    }
    $this->db->order_by('barang.id', 'asc');
    $this->db->limit(10);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      if ($barangid == "") {
        return $query->result_array();
      } else {
        return $query->row_array();
      }
    } else {
      return null;
    }
  }
  function get_data_barang()
  {
    $this->db->select('barang.*,(SELECT nama FROM kategori WHERE kategori.id = barang.kategoriid) as namakategori');
    $this->db->select('barang.*,');
    $this->db->from('barang');
    $this->db->order_by('barang.id', 'desc');
    $this->db->limit(10);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return NULL;
    }
  }
  public function get_data_kategori($kategoriid = "")
  {

    $this->db->select('kategori.*,');
    $this->db->from('kategori');
    if ($kategoriid != "") {
      $this->db->where('kategori.id', $kategoriid);
    }
    $this->db->order_by('kategori.id', 'desc');

    $this->db->limit(10);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      if ($kategoriid == "") {
        return $query->result_array();
      } else {
        return $query->row_array();
      }
    } else NULL;
  }
}
