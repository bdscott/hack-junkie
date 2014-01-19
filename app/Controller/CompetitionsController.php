<?php
class CompetitionsController extends AppController {
	
		
	public $uses = array('Application', 'Competition', 'Hacker');
	
	

	function index(){
		
	}
	
	function create(){
		if($this->data){
			$this->Hacker->save(array('email' => $this->data['Competition']['email'], 'password' => sha1($this->data['Competition']['password'])));
			$organizer = $this->Hacker->findByEmail($this->data['Competition']['email']);
			
			if($this->Competition->save(array('hacker_id' => $organizer['Hacker']['id'], 'name' => $this->data['Competition']['name'], 'city' => $this->data['Competition']['city'], 'state' => $this->data['state'], 'scheme' => $this->data['scheme'], 'event_start' => date('Y-m-d', strtotime($this->data['Competition']['event_start'])), 'event_end' => date('Y-m-d', strtotime($this->data['Competition']['event_end']))))){
				
				$this->redirect(array('controller' => 'applications', 'action' => 'index'));
			}
		}
	}
	
	function upload(){
		
	}
	
}
