<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		 if($this->session->userdata('isLoggedIn'))
		{
		redirect(base_url('dashboard'));
		}  
	}
	function index(){
		$this->load->view('login');		
	}
	
	function userAthentication ()
	{
			$username = $this->input->post("l_username");
			$password = $this->input->post("l_password");
			$this->load->model('Athentication');
			$res = $this->Athentication->userAth($username,$password);
			if($username == $res->username && $password == $res->password )
			{
				$this->session->set_userdata('isLoggedIn',true);
				$this->session->set_userdata('name',$res->name);
				$this->session->set_userdata('user_id',$res->id);
				$this->session->set_userdata('role',$res->role);
				redirect(site_url('dashboard'));
			}else 
			{
				$this->session->set_flashdata('error_msg', 'Invalid Username/Password!');
				redirect(site_url('login'));
			}
		
	}
	
	
	
}

?>