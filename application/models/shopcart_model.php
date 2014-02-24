<?php

class Shopcart_Model extends MY_Model {
	private $_table = "product_images";
	public $total_rows = "";
	
	public function getProduct($id){
		$query = $this->db->get_where("product_images", array('product_id' => $id));
		//$this->total_rows = $query->num_rows();
		return $query->row();
		
	}
	

}