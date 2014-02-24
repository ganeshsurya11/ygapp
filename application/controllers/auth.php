<?php 

class Auth extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
	}
	
	public function index(){
		$data['form'] = new Custom_Form();
		$data['main_content'] = 'auth/login';
		$this->load->view('template/main', $data);
	}
	
	public function login(){
		$data = $this->input->post();
		$user = $this->auth_model->check_login($data);
		if($user){
			$user_info = array(
				'user_id' => $user->id,
				'firstname' => $user->firstname,
				'role' => $user->role
			);
			$this->session->set_userdata($user_info);
			$this->session->set_flashdata('success', 'Login successful !');
			redirect('welcome/');
		}else{
			$this->session->set_flashdata('error', 'Please enter correct login details');
			redirect('auth/index');
		}
	}
	
	public function logout(){
		$data = $this->session->unset_userdata('user_id');
		$data = $this->session->unset_userdata('firstname');
		$this->session->set_flashdata('success', 'Logged out successfully !');
		redirect('auth/index');
	}

}