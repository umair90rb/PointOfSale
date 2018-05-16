<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller{
	
function index()
	{
		$this->session->unset_userdata('isLoggedIn');
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
?>