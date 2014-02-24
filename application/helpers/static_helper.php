<?php

class Static_Helper {
	
	public function __construct(){
		parent::__construct();
	}
	
	public static function flash_success($msg){
		if($msg){
			return "<div id='flash_success'>$msg</div>";
		}
	}
	
	public static function flash_error($msg){
		if($msg){
			return "<div id='flash_error'>$msg</div>";
		}		
	}
	
	public  function  loadCategories() {
		$q = $this->db->query("select * from categories where parent_id = 0");
		$result = $q->result();
		$str = "<ul>";
		foreach($result as $row){
			$str .= "<li class='ml0'>";
				$str .= anchor("products/$row->category_name/{$row->id}", $row->category_name, array('class'=>'bold'));
				$str .= self::isParent($row->id);
			$str .= "</li>";
		}
		$str .= "</ul>";
		return $str;
	}
	
	public  function isParent($id){
		$str = "";
		$q = $this->db->query("select * from categories where parent_id = $id");
		$result  = $q->result();
		if($q->num_rows() > 0) {
			$str = "<ul>";
			foreach($result as $row){
				$str .= "<li>";
				$str .= anchor("products/$row->category_name/{$row->id}", $row->category_name);
				$str .= self::isParent($row->id);
				$str .= "</li>";
			}
			$str .= "</ul>";
		}
		return $str;
	}
	
}