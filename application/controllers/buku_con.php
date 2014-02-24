<?php
class Buku_con extends CI_Controller {
public function Buku_con() {
parent::__construct();
$this->load->model('buku_model');//load the model
//$this->load->library('pagination');
}
//function to get the data from tb_book

//function to export to excel
function generateCsv() {
$query['data1'] = $this->buku_model->ToExcelAll();
$this->load->view('users/excel_view',$query);
}
}
?>