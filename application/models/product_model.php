<?php

class Product_Model extends MY_Model {
	private $_table = "categories";
	public $total_rows = "";
	
	public function getProduct($id){
		$query = $this->db->get_where("product_images", array('category_id' => $id));
		$this->total_rows = $query->num_rows();
		return $query->result();
		
	}
	
	public function getChildCategories($id){
		$categories = $this->db->get_where("categories", array('parent_id' => $id));
		return $categories->result();
	 
	}
	
	public function getAllCategories(){
		$query = $this->db->get('categories');
		$count = $query->num_rows();
		return $count->$query->result();
	}
	
	public function	addImages($data){
		$query = $this->db->insert('product_images', $data);
	}
		
}