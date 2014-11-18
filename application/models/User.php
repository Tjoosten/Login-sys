<?php
	Class User extends CI_Model {
		function login($username, $password) {
			$this->db->select('ID, Email, password')
							 ->from('users')
				 	 		 ->where('Email = ' . "'" . $username . "'")
					 		 ->where('Password = ' . "'" . MD5($password) . "'") 
					 		 ->limit(1);

			$query = $this->db->get();

			if($query->num_rows() == 1) {
				return $query->result();
			} else {
				return false;
			}
		}

		function Insert() {
			$Values = array(
				"Email"    => $this->input->post('Email'),
				"Password" => MD5($this->input->post('Password')),
				"Username" => $this->input->post('Username'),
				);

			$this->db->insert('users', $Values);
		}
	}