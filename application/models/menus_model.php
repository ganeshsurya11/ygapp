<?php 

class Menus_Model extends CI_Model {
	
	function getMenus(){
		$query = $this->db->query("SELECT * FROM menus where  parent_id = 0");
		$query->result();
		$menus = $query->result();
		$count = $query->num_rows();
		
		if($count > 0){
			$str = "<ul class='menus'>";
			foreach($menus as $m){
				$str .= "<li>";
				$str .= $m->menu_name;
				$str .=	$this->isParent($m->id);
				$str .= "</li>";
			}
			return $str .= "</ul>";
		}
	}
	
	function isParent($id){
		$query = $this->db->get_where("menus", array('parent_id' => $id));
		$menus = $query->result();
		$count = $query->num_rows();
		$str = "";
		if($count > 0){
			$str .= "<ul>";
				foreach($menus as $m){
					$str .= "<li>";
					$str .= $m->menu_name;
					$str .=	$this->isParent($m->id);
					$str .= "</li>";
				}
				$str .= "</ul>";
		}
		return $str;
	}
	
}