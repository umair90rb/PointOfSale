<?php

class User_Profile_M extends CI_Model{
	
	function getuser(){
		$id = $this->session->userdata('user_id');
		$data = $this->db->get_where('users',array("id"=>$id));
		return $data->row();
	}
	function updatePassword($newpass,$oldpass){
		$id = $this->session->userdata('user_id');
		$data = array(
               'password' => $newpass
            );
		$this->db->where('id', $id);
		$res = $this->db->update('users', $data);
		return $res;
	}
	
}
?>