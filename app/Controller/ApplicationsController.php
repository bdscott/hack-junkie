<?php

App::uses('AppController', 'Controller');

class ApplicationsController extends AppController {
	function index(){
	}
	
	function create(){
		if($this->Application->save($this->data)){
			$application = $this->Application->find('first', array('conditions' => array('email' => $this->data['email']), 'order' => array('id' => 'DESC')));
			$this->redirect(array('controller' => 'hackers', 'action' => 'register', $application['Application']['id']));
		}
	}
	
	function thanks(){
		
	}
}

?>