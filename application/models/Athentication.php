<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Athentication extends CI_Model{
	
	
	function userAth($username,$password)
	{
		$data = array(
				'username' => $username,
				'password' => $password
		);
		$query = $this->db->get_where('users',$data);
		$res = $query->row();
		return $res;
		
	}
	
}

?>