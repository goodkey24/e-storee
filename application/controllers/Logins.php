<?php
class Logins extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url', 'form'));
    $this->load->model('login');
  }
  function index()
  {
    if (($this->session->userdata('username'))) {
      redirect('');
    } else {
      $this->load->view('login');
    }
  }
  function cek_login()
  {
    $data = array(
      'username ' => $this->input->post('username'),
      'password' => md5($this->input->post('password'))
    );
    $hasil = $this->login->cek_user($data);
    $_log = array();
    if ($hasil->num_rows() == 1) {
      foreach ($hasil->result() as $val) {
        $sess_data['username'] = $val->username;
        $sess_data['adminid'] = $val->id;
        // $sess_data['petugasid'] = $val->id;
        $sess_data['level'] = $val->level;
        $this->session->set_userdata($sess_data);
        $_log['status'] = "1";
        $_log['keterangan']  = '<center><div class="alert alert-info" role="alert">
                <strong>Login Success</strong>
                </div></center>';
      }
    } else {
      $_log['status'] = "0";
      $_log['keterangan'] = '<center><div class="alert alert-danger mb-0" role="alert">
            <strong>Login Gagal</strong>
            </div></center>';
    }
    echo json_encode($_log);
  }
  function logout()
  {

    $this->session->sess_destroy();
    redirect('logins');
  }
}
