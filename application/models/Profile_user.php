<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile_user extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function cek_data($field = "", $where = "", $pelangganid = "")
  {
    $this->db->select('*');
    $this->db->from('user');
    if ($field != "") {
      $this->db->where($field, $where);
    }
    if ($pelangganid != "") {
      $this->db->where_not_in('id', $pelangganid);
    }
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function get_data($pelangganid = "")
  {
    $pelangganid = $pelangganid == "" ? $this->session->userdata('pelangganid') : $pelangganid;
    $this->db->select('user.*,');
    $this->db->from('user');
    $this->db->where('user.id', $pelangganid);

    $this->db->order_by('user.id', 'DESC');

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return NULL;
    }
  }
}
