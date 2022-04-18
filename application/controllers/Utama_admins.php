<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama_admins extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      cek_session('admin');
      $this->load->model(array('utama_admin'));
   }
   function index()
   {
      if ($this->session->userdata('level') == 'admin') {
         $this->template->view('template_admin', 'home_admin');
      }
   }
}
