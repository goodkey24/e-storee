<?php
function cek_session()
{
	$CI = &get_instance();
	$session = $CI->session->userdata('username');
	if (empty($session)) {
		redirect('logins');
	}
}


// Login Helper Dosmer

// function cek_session($level_cek = ""){
// $CI = &get_instance();
// $session = $CI->session->userdata('username');
// $level = $CI->session->userdata('level');
// if($level_cek != "" && $level != "admin"){
// redirect('logins/logout');
// }
// if(empty($session)){
// redirect('logins');
// }
// }