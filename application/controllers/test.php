<?php

class Test extends CI_Controller {

	public function index(){
		
		$this->form_validation->set_rules('fname', 'First name', 'required|min_length[5]|is_unique[users.username]');
		$this->form_validation->set_rules('address', 'test', 'sdfs');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		//$this->form_validation->set_message('required', 'it is required');
		if($this->form_validation->run() == false){
			//echo form_error('fname'); 
		}else {
			echo 'Success';
		}
		
		//$name = $this->input->post('fname');
		if($name){
			
		}
		$data['main_content'] = 'welcome_message';
		$this->load->view('template/main',  $data);
	}
}