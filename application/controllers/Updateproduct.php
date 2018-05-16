<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Updateproduct extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role') != 'admin'){
			echo "You are not Administrator!";exit;
		}
	}
	function index()
	{
		$this->load->view('updateproduct');
		
	}
	function showproduct($id)
	{
		$this->load->model('product');
		$res['product'] = $this->product->showproduct($id);
		$this->load->view('updateproduct',$res);
	}
	
	function updatePro()
	{
		
		$oldAccessId = $this->input->post('oldAccessId');
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$accessid = $this->input->post('accessid');
		$this->load->model('product');
		$res = $this->product->updatePro($oldAccessId,$name,$price,$accessid);
		if($res)
		{
			echo "<script> alert('Product Updated!');</script>";
			echo "<script>window.location ='".base_url('showproduct')."'; </script>";
		}else 
		{
			echo "<script> alert('Some Error!'); </script>";
			echo "<script>window.location ='".base_url('showproduct')."'; </script>";
		}
	}
	function deleteproduct($id)
	{
		$this->load->model('product');
		$this->product->deleteProduct($id);
		redirect('showproduct');
	}
	
}

?>