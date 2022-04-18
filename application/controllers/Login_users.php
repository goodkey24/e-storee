<?php
class Login_users extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url', 'form'));
    $this->load->model('login_user');
    $this->load->model(array('kategori_frontend'));
  }
  function index()
  {
    if (($this->session->userdata('email'))) {   // "?" 
      redirect('');
    } else {

      $this->load->view('login_user');
    }
  }
  function cek_login()
  {
    $data = array(
      'email' => $this->input->post('email'),
      'password' => md5($this->input->post('password'))
    );
    $hasil = $this->login_user->cek_user($data);
    $_log = array();
    if ($hasil->num_rows() == 1) {
      foreach ($hasil->result() as $val) {
        $sess_data['email'] = $val->email;
        $sess_data['pelangganid'] = $val->id;
        // $sess_data['petugasid'] = $val->id;
        // $sess_data['level'] = $val->level;
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
    $this->session->set_flashdata('pesan', '<div cllass="alert alert-success" role="alert">Anda Sudah Logout</div>');

    redirect('utamas');
  }
}
