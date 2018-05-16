<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Dashboard extends CI_Controller{

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
		public function getData()
		{
			$accessid = $_POST['accessid'];
			
			
			
			$this->load->model('product');
			$product = $this->product->getProduct($accessid);
			
			
			echo json_encode($product);
			
			
		}	
		public function customer(){
			
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];
			$this->load->model('product');
			$res = $this->product->saveCustomer($name,$phone,$address);
			$this->session->set_userdata('cus_id', $res);
			echo json_encode($res);
		}
		public function bill(){
			$discount = $_POST['discount'];
			$qty = $_POST['qty'];
			$data = $_POST['pro'];
			$cus_id = $this->session->userdata('cus_id');
			$item = $data['name'];
			$price = $data['price'];
			$date = date('d-m-Y H:i');
			$this->load->model('product');
			$this->product->savebill($cus_id,$item,$price,$date,$discount,$qty);
			}
		public function cancel(){
			$this->session->unset_userdata('cus_id');
		}
		public function get_user_id(){
			$total = $_POST['total'];
			$this->load->model("product");
			$this->product->total($total);
			echo $this->session->userdata('cus_id');
		}
		public function update_stock_cus(){
			$data = $_POST["pro"];
			$qty = $_POST["qty"];
			$accessid = $data['accessid'];
			$this->load->model('stock_m');
			$res = $this->stock_m->update_stock_by_accessid($accessid);
			$saled =  $res->saled;
			$remained =  $res->remained;
			$saled = $saled + $qty;
			$remained = $remained - $qty;
			$res = $this->stock_m->update_stock_final($accessid,$saled,$remained);
			if($res){echo "ok";}
			}
	
}

 ?>