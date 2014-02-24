<?php

class CategoriesController extends AppController {
	public $name = 'Categories';
	
	public function index(){
	 	$this->set('categories', $this->Category->find('all'));
	}
	
	public function add(){
		if(!empty($this->data)){
			$this->Category->save($this->data);
			$this->Session->setFlash("Category saved successfully");
			$this->redirect('/categories/');
		}
	}
	
	public function edit($id = NULL){
		if(empty($this->data)) {
			$this->data = $this->Category->read(NULL, $id);
		} else {
			if($this->Category->save($this->data)){
				$this->Session->setFlash("Category saved !");
				$this->redirect("/categories/");
			}
		}
	}
	
	public function delete(t$id = NULL){
		$this->Category->delete($id);
		$this->Session->setFlash("The category has been deleted");
		$this->redirect("/categories/");
	}
	
	
}