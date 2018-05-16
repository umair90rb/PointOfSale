<?php

class Stock_m extends CI_Model{
	
	function getdata(){
		
		$data = $this->db->get('stock');
		return $data->result();
	}
	
	function addsstock($accessid,$item,$qty,$time){
		
		$data = array(
			"accessid" => $accessid,
			"item" => $item,
			"total_qty" => $qty,
			"remained" => $qty,
			"time" => $time
		);
		$res = $this->db->insert("stock",$data);
		if($res){return true;}
		
	}
	function getData_by_id($accessid){
		
		$this->db->select();
		$this->db->where('accessid', $accessid);
		$data = $this->db->get('stock');
		return $data->row();
		
	}
	function update_stock($accessid,$item,$qty){
		$remained=$this->getData_by_id($accessid);
		$remainedItem = $remained->remained;
		$totalRemained = $remainedItem + $qty;
		$data = array(
			   'total_qty' => $totalRemained,
			   'remained' => $totalRemained
            );
		$this->db->where('accessid', $accessid);
		$res = $this->db->update('stock', $data);
		return $res;
	}
	function update_stock_by_accessid($accessid){
		$this->db->select('saled,remained');
		$this->db->where('accessid',$accessid);
		$data = $this->db->get('stock');
		return $data->row();
	}
	function update_stock_final($accessid,$saled,$remained){
		$data = array(
               'remained' => $remained,
               'saled' => $saled
            );
		$this->db->where('accessid', $accessid);
		$res = $this->db->update('stock', $data);
		return $res;
	}
	function checkstock($accessid){
		$check = $this->db->get_where('stock', array('accessid' => $accessid));
		return $check->row();
	}
	
}
?>