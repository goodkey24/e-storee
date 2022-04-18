<?php
if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Kategori_frontend extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  function ambil($where = "")
  {
    $this->db->select('*');
    $this->db->from('kategori');
    if ($where != "") {
      $this->db->where('kategori.id', $where);
    }
    $this->db->order_by('kategori.id', 'desc');
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
}
