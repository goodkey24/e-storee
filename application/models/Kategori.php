<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Model
{
   function __construct()
   {
      parent::__construct();
   }
   function get_data($kategoriid = "")
   {
      $this->db->select('kategori.*,');
      $this->db->from('kategori');
      if ($kategoriid != "") {
         $this->db->where('kategori.id', $kategoriid);
      }
      $this->db->order_by('kategori.id', 'asc');

      $query = $this->db->get();
      if ($query->num_rows() > 0) {
         if ($kategoriid == "") {
            return $query->result_array();
         } else {
            return $query->row->array();
         }
      } else {
         return NULL;
      }
   }
   function cek_data($field  = "", $where = "", $kategoriid = "")
   {
      $this->db->select('*');
      $this->db->from('kategori');
      if ($field != "") {
         $this->db->where_not_in('id', $kategoriid);
      }
      if ($kategoriid != "") {
         $this->db->where_not_in('id', $kategoriid);
      }
      $query = $this->db->get();
      return $query->num_row();
   }
}
