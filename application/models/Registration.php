<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function get_data($userid = "")
  {
    $this->db->from('user');
    if ($userid != "") {
      $this->db->where('user.id', $userid);
    }
    $this->db->order_by('user.id', 'asc');

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      if ($userid == "") {
        return $query->result_array();
      } else {
        return $query->row_array();
      }
    } else {
      return NULL;
    }
  }

  function cek_data($field = "", $where = "", $userid = "")
  {
    $this->db->select('*');
    $this->db->from('user');
    if ($field != "") {
      $this->db->where($field, $where);
    }
    if ($userid != "") {
      $this->db->where_not_in('id', $userid);
    }
    $query = $this->db->get();
    return $query->num_rows();
  }
}
