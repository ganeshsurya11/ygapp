<?php

class Static_Helper {
	
	public function __construct(){
		parent::__construct();
		echo "my helper callled";
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
	
	
	
}