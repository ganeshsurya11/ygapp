<?php

class Shopcart extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('shopcart_model');
	}
	
	public function index(){

		$data['main_content'] = 'shopcart/index';
		$data['products'] = $this->cart->contents();
		$data['item_count'] = count($this->cart->contents());
		$this->load->view('template/main', $data);	
		
		
	}
	
	public function add(){
		$productId =  $this->uri->segment(3);
		$item = $this->shopcart_model->getProduct($productId);
		$products = array(
               'id'      => $item->product_id,
               'qty'     => 1,
               'price'   => $item->price,
               'name'    => $item->product_name,
               'options' => array('image_name' => $item->image_name, 'Color' => 'Red')
            );

		if($this->cart->insert($products)){
			redirect('/shopcart/index');
		}
	}
	
	public function update(){
		$data = $this->input->post(); 
		//print_r($this->cart->contents());
		/*$m = array(
		"qty" => array(
				0 => 2,
				1 => 6
			),
		"rowid" => array(
				0 => "3ce6ae8ef9e992d7ba9eac64e3a3664c",
				1 => "815f8dc1c3b70e2de7f544d906b918a5",
			)
		);*/	
		$q 		= $data['qty'];
		$rid 	= $data['rowid'];
		$c = array();
		foreach($rid as $k=>$v){
			$c[] = array('rowid' => $rid[$k], 'qty' => $q[$k]);
		}
		if($this->cart->update($c)){
				$this->session->set_flashdata('success', 'Updated the quantiity and amount');
				redirect('shopcart/index');
			}
		
	}
	
	public function remove(){
		$this->cart->update(array(
			'rowid' => $this->uri->segment(3),
			'qty' => 0
		));
		redirect('shopcart/index');
	}
	
}