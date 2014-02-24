<?php 

class Auth_Model extends MY_Model {
	
	public function check_login($data){
			$username = $data['username'];
			$password = md5($data['password']);
			$query = $this->db->get_where("users", array('username' => $username, 'password' => $password));
			if($query->num_rows() > 0) {
				return $query->row();
			}
	}
	
}