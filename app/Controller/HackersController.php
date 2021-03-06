<?php
class HackersController extends AppController {
	
		
	public $uses = array('Application', 'Hacker');
	
	function register($application_id) {
		if ($this-> data) {
			$application = $this-> Application-> findById($application_id);
			$email = $application['Application']['email'];
			$password = sha1($this -> data['password']);

			if ($this-> Hacker-> save(array('email'=> $email, 'password' => $password))) {
				$this-> redirect(array('controller'=> 'applications', 'action'=> 'thanks'));
			}
		}
	}

	function login() {
		if (isset($this->data["email"]) && isset($this->data["password"])) {
			$email = $this-> data["email"];
			$password = $this-> data["password"];
			$hackerDetails = $this-> Hacker-> findByEmail($email);
			
			if($hackerDetails["Hacker"]["password"] == sha1($password)){
				$this->Session->write('hackerid', $hackerDetails["Hacker"]["id"]);
				$this->Session->write('hackerUsername', $email);
				$this->redirect(array('controller' => 'applications', 'action' => 'index'));
			}
		}
	}
	
	function logout(){
		$this->Session->destroy();
		$this->redirect(array('controller' => 'hackers', 'action' => 'login'));
	}
	
	function index(){
		
	}

}
