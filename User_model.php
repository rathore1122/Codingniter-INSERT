<?php
class User_model extends CI_model{
	function create($formArray)
	{
		$this->db->insert('users',$formArray); //insert
		
	
	}
}
?>