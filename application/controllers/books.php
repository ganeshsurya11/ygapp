<?php

class Books extends CI_Controller {

	public function index(){
		$this->load->model('books_model');
	//	$this->books_model->general();
		
		$data['title'] = form_input('title', 'ss');
		$data['ftitle'] = form_input('ftitle', 'ss');
	
		$this->load->view('form1', $data);
	}

}