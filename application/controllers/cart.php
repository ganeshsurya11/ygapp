<?php

class Shop extends MY_Controller {
	
	public function __construct(){
		
	}
	
	public function index(){
	$this->load->library('cart');
		$data = array(
               'id'      => 'sku_123ABC',
               'qty'     => 1,
               'price'   => 39.95,
               'name'    => 'T-Shirt',
               'options' => array('Size' => 'L', 'Color' => 'Red')
            );

//$this->cart->insert($data);
	}
	
}