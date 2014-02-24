<?php

class MY_Controller extends CI_Controller {
	
	public $checkLogin = false;

	public function __construct(){
		parent::__construct();
		
		
		if($this->checkLogin == true){
			$this->checkLogin();
		}
	}
	
	public function checkLogin(){
		$userId = $this->session->userdata('user_id');
		if($userId == ""){
			$this->session->set_flashdata('error', 'Please login to continue');
			redirect('auth/');
		}
	}
	
	public function controller(){
		$ci =& get_instance();
		$ci->router->fetch_class();
	}
	
	public function _remap($method, $args) {
		// Call before action
		$this->before($method);
		call_user_func_array(array($this, $method), $args);	
		// Call after action
		$this->after($method);
	}
	
	
	protected function before($action) { 	
		
	}
	
	protected function after() { 
	
	}
	
}