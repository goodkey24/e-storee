<?php
if (!defined('BASEPATH'))
  exit('No direct access allowed !');
class Caris extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('cari');
    $this->load->model(array('kategori_frontend'));
  }
  function index()
  {
    $keyword = $this->input->get('keyword');

    $data['kategori'] = $this->kategori_frontend->ambil();  // deklarasi variable kategori
    $data['result'] = $this->cari->search($keyword);

    $this->template->view('template_frontend', 'cari', $data);
  }
}
