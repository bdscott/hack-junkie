<?php
class HackersController extends AppController {

	public $uses = array('Application', 'Hacker');
	
	function register($application_id){	
		if($this->data){
			$application = $this->Application->findById($application_id);
			$email = $application['Application']['email'];
			$password = sha1($this->data['password']);
			
			if($this->Hacker->save(array('email' => $email, 'password' => $password))){
				$this->redirect(array('controller' => 'applications', 'action' => 'thanks'));
			}
		}
	}

}