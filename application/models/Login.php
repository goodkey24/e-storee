<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Model
{

   function __construct()
   {
      parent::__construct();
      date_default_timezone_set('Asia/Jakarta');
   }

   function setUsername($username)
   {
      $this->username = $username;
   }

   function getUsername()
   {

      return $this->username;
   }

   public function clear_log()
   {

      return $this->db->truncate('admin_log');
   }

   // public function log_user()
   // {

   //    $this->db->order_by('a.tgl_akses', 'DESC');
   //    $this->db->join('admin b', 'b.id = a.id_user', 'left outer');
   //    return $this->db->get('admin_log a');
   // }
   public function cek_user($data)
   {

      $query = $this->db->get_where('admin', $data);
      return $query;
   }
   function ambil()
   {
      $this->db->select('admin.*');
      $this->db->from('admin');
      $this->db->where('username', $this->getUsername());
      $login = $this->db->get();
      if ($login->num_row() > 0) {
         return $login->result_array();
      } else {
         return NULL;
      }
   }

   // function cek_data($field = "", $where = "", $adminid = "")
   // {

   //    $this->db->select('*');
   //    $this->db->from('admin');
   //    if ($field != "") {
   //       $this->db->where($field, $where);
   //    }
   //    if ($adminid != "") {

   //       $this->db->where_not_in('id', $adminid);
   //    }
   //    $query = $this->db->get();

   //    return $query->num_rows();
   // }
}
