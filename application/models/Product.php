<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model{
	
	function checkid($accessid){
		$res = $this->db->get_where('products', array('accessid' => $accessid));
		return $res->row();
	}
	
	function addPro($name,$price,$accessid)
	{
		$data = array(
				'name' => $name,
				'price' => $price,
				'accessid' => $accessid
		);
		$query = $this->db->insert('products',$data);
		return $query;
	}
	
	function showPro(){
	 $data = $this->db->get('products');
	 return $data->result();
		
	}
	function showproduct($id)
	{
		$data = array('id' => $id);
		$query = $this->db->get_where('products',$data);
		return $query->row();
	}
	function updatePro($id,$name,$price,$accessid)
	{
		$data = array(
				'name' => $name,
				'price' => $price,
				'accessid' => $accessid
		);
		$this->db->set($data);
		$this->db->where('accessid',$id);
	    $res = 	$this->db->update('products',$data);
		return $res;
		
	}
	function getProduct($accessid){
		$this->db->where('accessid',$accessid);
		$res =  $this->db->get('products');
		return $res->row();
	}
	function deleteProduct($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("products");
	}
	function saveCustomer($name,$phone,$address){
		$data = array(
			"name"=>$name,
			"mobile"=>$phone,
			"address"=>$address
		);
		$this->db->insert("customers",$data);
		$res = $this->db->insert_id();
		return $res;
	}
	function savebill($cus_id,$item,$price,$time,$discount,$qty){
		$data = array(
			"customer_id"=>$cus_id,
			"item"=>$item,
			"price"=>$price,
			"time"=>$time,
			"discount"=>$discount,
			"qty"=>$qty
		);
		$this->db->insert("bill_detail",$data);
	}
	function total($total){
		$id = $this->session->userdata("cus_id");
		$data = array("total_paid_ammount" => $total);
		$this->db->where('id', $id);
		$this->db->update('customers', $data); 		
	}
	
}

?>