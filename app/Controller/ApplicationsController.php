<?php

App::uses('AppController', 'Controller', 'Competition');

class ApplicationsController extends AppController {
	
	public $uses = array('Competition', 'Application');
	
	function index() {
		if($this->Session->read('hackerid') == null){
			$this->redirect(array('controller' => 'hackers', 'action' => 'login'));
		} else {
			$applications = $this->Application->findAllByEmail($this->Session->read('hackerUsername'));
			if(count($applications) == 0){
				$competition = $this->Competition->findByHacker_id($this->Session->read('hackerid'));
				$applications = $this->Application->findAllByCompetition_id($competition['Competition']['id']);
				$this->set('is_organizer', true);
			}
			$this->set('applications', $applications);
		}
	}

	function create($competition_id) {
		if ($this->data) {
			$this -> Application -> set($this -> request -> data);
			if ($this -> Application -> validates()) {
				// it validated logic
				$newApplication = $this->data;
				$newApplication['Application']['competition_id'] = $competition_id;
				$newApplication['Application']['status'] = 'In review';
				$this->Application->save($newApplication);
				$application = $this -> Application -> find('first', array('conditions' => array('email' => $this -> data['email']), 'order' => array('Application.id' => 'DESC')));
				$this -> redirect(array('controller' => 'hackers', 'action' => 'register', $application['Application']['id']));
				//print_r($this -> data);
			} else {
				// didn't validate logic
				$this->set('errors', $this->Application->validationErrors);
			}
		} else {
			$competition = $this->Competition->findById($competition_id);
			if($competition['Competition']['scheme'] == 'application'){
				$scheme_verbiage = 'Apply';
			} else {
				$scheme_verbiage = 'Register';
			}
			
			$this->set(array('competition' => $competition, 'scheme_verbiage' => $scheme_verbiage));
		}
	}

	function thanks() {

	}

}
?>