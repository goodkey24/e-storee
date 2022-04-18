<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_user extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
  }

  function setEmail($email)
  {
    $this->email = $email;
  }

  function getEmail()
  {

    return $this->email;
  }

  public function clear_log()
  {

    return $this->db->truncate('user_log');
  }

  public function log_user()
  {

    $this->db->order_by('a.tgl_akses', 'DESC');
    $this->db->join('user b', 'b.id = a.id_user', 'left outer');
    return $this->db->get('user_log a');
  }
  public function cek_user($data)
  {

    $query = $this->db->get_where('user', $data);
    return $query;
  }
  function ambil()
  {
    $this->db->select('user.*');
    $this->db->from('user');
    $this->db->where('email', $this->getEmail());
    $login = $this->db->get();
    if ($login->num_row() > 0) {
      return $login->result_array();
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
