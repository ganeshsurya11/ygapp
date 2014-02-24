<?php 

class User_Model extends CI_Model {
		

		public function saveUser($data){
			$id =  $data['id'];
			unset($data['id']);
			unset($data['submit']);
			if(!$id) {
				if(isset($data['city'])){
					$data['city'] = implode(',', $data['city']);
				}
				if(isset($data['password'])){
					$data['password'] = md5($data['password']);
				}
				$query = $this->db->insert('users', $data);
				$this->db->insert_id();
			} else  {
				if($data['city'] ){
					$data['city'] = implode(',', $data['city']);
				}
				
				$this->db->where('id', $id);
				$this->db->update('users', $data);
			}
		}
		
		public function update($id){
			if($id){
				$this->db->where('id', $id);
				$query  = $this->db->update('users', $data);
				return $queyry->result_array();
			}
		}
		
		public function getUser($id){
			if($id){
				$query  = $this->db->get_where('users', array('id'=>$id));
				return $query->row();
			}
			return false;
		}
		
		public function getAllUsersArray(){
			$query = $this->db->get('users');
			return $query->result_array();
		}
		
		public function deleteAll(){
			return $this->db->query("delete  from users");
		}
		
}