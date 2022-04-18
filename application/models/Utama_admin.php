<?php
if (!defined('BASEPATH')) exit('No direct script allowed');

class Utama_admin extends CI_Model
{
   function __construct()
   {
      parent::__construct();
   }

   function get_data($kelolaid = "")
   {
      $this->db->select('admin.*,
        ')->where('level', 'petugas');
      $this->db->from('admin');
      if ($kelolaid != "") {
         $this->db->where('admin.id', $kelolaid);
      }
      $this->db->order_by('admin.id', 'asc');

      $query = $this->db->get();
      if ($query->num_rows() > 0) {
         if ($kelolaid == "") {
            return $query->result_array();
         } else {
            return $query->row_array();
         }
      } else {
         return NULL;
      }
   }

   // function cek_data($field = "", $where = "", $adminid = "")
   // {
   //     $this->db->select('*');
   //     $this->db->from('admin');
   //     if ($field != "") {
   //         $this->db->where($field, $where);
   //     }
   //     if ($adminid != "") {
   //         $this->db->where_not_in('id', $adminid);
   //     }
   //     $query = $this->db->get();

   //     return $query->num_rows();
   // }
}
