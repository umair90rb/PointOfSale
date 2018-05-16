<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddUsers extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role') != 'admin'){
			echo "You are not Administrator!";exit;
		}
	}
	function index()
	{
		$this->load->view('AddUsers');
		
	}
	function addUser ()
	{
		$name = $this->input->post('name');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role = $this->input->post('role');
		
		if (empty($name) || empty($username) || empty($password) || empty($role))
		{
			echo "<script> alert ('All fields required!');</script>";
			echo "<script> window.location = '".base_url('AddUsers')."' ;</script>";
		}
		else 
		{
			$this->load->model('register');
			$res =  $this->register->addUser($name,$username,$password,$role);
		if ($res)
		{
			echo "<script> alert ('User Registered!'); </script>";
				redirect(base_url('dashboard'));
		}
		else
		{
			echo "<script> alert ('Some Error!'); </script>";
			redirect(base_url('AddUsers'));
		}
		}
	}
}
?>