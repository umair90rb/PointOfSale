<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Profile_C extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		
		$this->load->model('User_Profile_M');
		$data['user'] = $this->User_Profile_M->getuser();
		$this->load->view('user_profile_v',$data);
		
	}
	function updatepassword(){
		$newpass = $this->input->post('newpass');
		$oldpass = $this->input->post('oldpass');
		$this->load->model("User_Profile_M"); 
		$check = $this->User_Profile_M->getuser();
		if($oldpass == $check->password){
		$res = $this->User_Profile_M->updatePassword($newpass,$oldpass);
		if($res){echo "Password Updated";}
		}else{
			echo "Old Password not match!";
		}
	}
	
}
?>