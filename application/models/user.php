<?php
	Class User extends CI_Model {
		function login($username, $password) {
			$this->db->select('id, username, password');
					 ->from('users');
				 	 ->where('username = ' . "'" . $username . "'"); 
					 ->where('password = ' . "'" . MD5($password) . "'"); 
					 ->limit(1);

			$query = $this->db->get();

			if($query->num_rows() == 1) {
				return $query->result();
			} else {
				return false;
			}
		}
	}
?>