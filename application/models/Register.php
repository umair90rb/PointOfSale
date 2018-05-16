<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Model{
	
	
	function addUser($name,$username,$password,$role)
	{
		$data = array(
			'name' => $name,
			'username' => $username,
			'password' => $password,
			'role' => $role
		);
		$query = $this->db->insert('users',$data);
		return $query;
	}
	
}

?>