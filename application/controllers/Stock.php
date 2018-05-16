<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role') != 'admin'){
			echo "You are not Administrator!";exit;
		}
	}
	function index()
	{
		
		$this->load->model('stock_m');
		$data['stock'] = $this->stock_m->getdata();
		$this->load->view('stock',$data);
		
	}
	function add_stock(){
		$this->load->view('add_stock');
	}
	function update_stock(){
		$this->load->view('update_stock');
	}
	function addstock(){
		
		$accessid = $this->input->post("accessid");
		$item = $this->input->post("item");
		$qty = $this->input->post("qty");
		$time = time('d-m-Y H:i');
		$this->load->model("Stock_m");
		$check = $this->Stock_m->checkstock($accessid);
		if($check){
				echo "<script>alert('Stock already added');</script>";
				echo "<script> window.location = '".base_url('stock')."' ;</script>";
		}
		else{
		$res = $this->Stock_m->addsstock($accessid,$item,$qty,$time);
		if($res == true){
			echo "<script>alert('Stock added');</script>";
			echo "<script> window.location = '".base_url('stock/add_stock')."' ;</script>";
		}
		}
	}
	function updatestock(){
		$accessid = $this->input->post("accessid");
		$this->load->model("stock_m");
		$data = $this->stock_m->getData_by_id($accessid);
		echo json_encode($data);
	}
	function final_update(){
		$accessid = $this->input->post("accessid");
		$item = $this->input->post("item");
		$qty = $this->input->post("qty");
		$this->load->model("stock_m");
		$res = $this->stock_m->update_stock($accessid,$item,$qty);
		if($res){echo "Update successfully";
		}else{echo "Some Error";}
	}
	
}
?>