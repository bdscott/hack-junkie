<?php

App::uses('AppController', 'Controller');

class ApplicationsController extends AppController {
	function index(){
	}
	
	function create(){
		$this->Application->save($this->data);
	}
}

?>