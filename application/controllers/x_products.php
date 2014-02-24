<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("product_model");
	}

	public function index()
	{
		$id = $this->uri->segment(3);
		$data['products']  = $this->product_model->getProduct($id);
		$data['main_content'] = "products/list";
		$this->load->view('template/main', $data);
	}
	

}