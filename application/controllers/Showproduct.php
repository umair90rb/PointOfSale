<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Showproduct extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		
		
	}
	function index()
	{
		
		$this->load->model('Product');
		$data['products'] = $this->Product->showPro(); 
		$this->load->view('showproduct',$data);
	}
	
}

?>