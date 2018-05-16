<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller{
	
function index()
	{
		$this->load->view('search');
	}
	function searched(){
		$id = $this->input->post('id');
		$this->load->model('customer');
		$res = $this->customer->search($id);
		$data = json_encode($res);
		echo $data;
	}
}
?>