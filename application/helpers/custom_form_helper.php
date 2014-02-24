<?php

class Custom_Form {
	public $object = "";
	
	public function __construct($object = ""){
		$this->object  = $object;
	}
	
	public  function hidden($name, $value='', $opts = array()){ 
		if(isset($this->object->id)){
			$value = $this->object->$name;
		}
		return $str = "<input type='hidden'  name=\"$name\"  value = $value >";
	}
	
	public  function input($name, $value='', $options = array()){
		$opts  = '';
		if(isset($this->object->id)){
			$value = $this->object->$name ; 
			$val =  "  value =  '$value'  ";
		 } else {  $val =  "  value =  '$value'  ";		 }
		 // To generate extra options :
		if($options) {
			foreach($options as $k => $v){  $opts  .= "$k = '$v'  "; 	}
		}
		return $str = "<input type='text'  name=\"$name\" $val  $opts >";
	}
	
	public function radio($name, $value, $opts = array()){
		$checked = "";
		if(isset($this->object->id) && $value == $this->object->$name){
			$checked = "checked";
		}
     return $str = "<input type='radio'  name=\"$name\" value=\"$value\"  $opts  $checked>";
	}
	
	public function checkbox($name,  $value, $opts = array()){
		$checked = "";
		if(isset($this->object->id))	 {
			$arr = explode(",", $this->object->city);
				if(count($arr) > 1){
					foreach($arr as $k => $v) :
						if($v == $value) { $checked = "checked";}
					endforeach;
				} else { 
					if($this->object->city == $value) { $checked = "checked";}
				}
		}
			return $str = "<input type='checkbox'  name=\"$name\" value=\"$value\"   $checked>";
	}
	
	public function select($name, $options = array()){
			$set_option = "";
			$str  = "<select name = $name>";
			foreach($options as $opt_val=> $opt_text){
				if(isset($this->object->$name)  && $this->object->$name == $opt_val) { 
					$set_option = "selected"; }	
				else	{ 
						$set_option = ""; 
					}
					$str  .= "<option $set_option  value = \"$opt_val\"  >".$opt_text."</option>";
			}
			$str .= "</select>";
		return $str;
	}
	
}