<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menus extends CI_Controller {

	public function index()
	{	
		$this->load->model("menus_model");
		$menus = $this->menus_model->getMenus();
		$data['main_content'] = "menus/menus_view";
		$data['menus'] = $menus;
		$this->load->view('template/main', $data);
	}
	
	function custom(){
		$params['fname'] = 'Ganesh';
		$this->load->library('mytest', $params);
		$this->load->view('mytest_view', $params);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */