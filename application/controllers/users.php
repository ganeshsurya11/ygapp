<?php 

class Users extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model'); ini_set('display_errors',0); 
	}
	
	public function index(){
			$data['title'] = 'Users List';
			
		
		$this->load->library('pagination');
		$config['base_url'] = 'http://yg.com/users/index';
		$config['total_rows'] = $this->db->get('users')->num_rows();
		$config['per_page'] = 20;
		$config['num_links'] = 20;
		$this->pagination->initialize($config);
		$query = $this->db->get('users',$config['per_page'],$this->uri->segment(3));
		$data['users'] = $query->result();

		$data['main_content'] = 'users/list_view';
		$this->load->view('template/main', $data);
	}
	
	public function create(){
		
		$post_data = $this->input->post();
		 $this->form_validation->set_rules('username', 'Username', 'required');
		 if($this->form_validation->run() == FALSE){
			
		 }else{		 
			$this->user_model->saveUser($post_data);
			$this->session->set_flashdata("success", "Account saved succssfully ");
			redirect('users/index');
		}
		$data['main_content'] = 'users/register_form';
		$data['form'] = new Custom_Form();
		$this->load->view('template/main', $data);
	}

	public function edit(){
		//$post_data = $this->db->get('users');
		
		$query = $this->db->get_where('users', array('id' => 3));
		$users  = $this->db->get_where('users', array('id' => 3));
		$m = $users->row();
		$data['form'] = new Custom_Form($m);
		$data['main_content'] = 'users/edit_form';
		$this->load->view('template/main', $data);
	}
	
	public function deleteAll(){
		if($this->user_model->deleteAll()){
			$this->session->set_flashdata('success', 'Deleted All Records');
			redirect('users/index');
		}else{
			$this->session->set_flashdata('error', 'Error Found !');
			redirect('users/index');
		}
	}
	
	public function generatePdf(){
		$this->load->library('pdf');
		$data['users'] = $this->user_model->getAllUsers();
		$data['main_content']  = 'users/list_view';
		$this->pdf->load_view('template/main', $data);
		$this->pdf->render();
		$this->pdf->stream("users.pdf");
		$this->session->set_flashdata('success', 'Pdf generated ');
		redirect('users/index');
	}
	
	function generateCsv() {
		$query['data1'] = $this->user_model->getAllUsersArray();
		$this->load->view('users/excel_view',$query);
	}
	
	 public function importCsv()
	{
		$handle = fopen('users(2).csv', "r");
		if (false !== $handle) {
			fgetcsv($handle, 1000); // Skip header row
			while (false !== ($row = fgetcsv($handle, 1000))) {
				if($row[1] != '') {
					$sql="insert into users(id,username,phone)values('".$row[0]."','".$row[1]."','".$row[2]."')";
					mysql_query($sql);
				} else{
					exit;
				}
			}
			fclose($handle);
		}
	}
}