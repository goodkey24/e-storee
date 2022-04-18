<?php
if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Cari extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
  }
  public function search($keyword)
  {
    $this->db->select('barang.*,');
    $this->db->like('nama_brg', $keyword);
    $query = $this->db->get('barang');
    return $query->result();
  }
}
