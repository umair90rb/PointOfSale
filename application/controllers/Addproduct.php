<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addproduct extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role') != 'admin'){
			echo "You are not Administrator!";exit;
		}
	}
	function index()
	{
		
		$this->load->view('addproduct');
		
	}
	function addProduct()
	{
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$accessid = $this->input->post('accessid');
		if (empty($name) || empty($price) || empty($accessid))
		{
			echo "<script> alert ('All Information is Required Required!');</script>";
			echo "<script> window.location = '".base_url('Addproduct')."' ;</script>";
		}else
		{
		$this->load->model('Product');
		$check = $this->Product->checkid($accessid);
		if($check){ echo "<script> alert ('Access Id already used!');</script>";echo "<script> window.location = '".base_url('Addproduct')."' ;</script>"; }else{
		$res = $this->Product->addPro($name,$price,$accessid);
		if($res)
		{
			echo "<script> alert ('Product Add!');</script>";
			echo "<script> window.location = '".base_url('Addproduct')."' ;</script>";
		}else
		{
			echo "<script> alert ('Some error!');</script>";
			echo "<script> window.location = '".base_url('Addproduct')."' ;</script>";
		}
		
		}
		}
	}
	
}

?>