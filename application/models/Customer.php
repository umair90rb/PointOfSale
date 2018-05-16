<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('isLoggedIn'))
		{
			redirect(base_url(Login));
		}
	}
	function index()
	{
		$this->load->view('dashboard');
	}
	function search($id){
		$data = $this->db->query("SELECT * FROM customers AS c,bill_detail AS b WHERE c.id = b.customer_id AND c.id= $id");
		return $data->result();
	}
}
	?>