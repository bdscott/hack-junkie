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
		if (isset($this->data["username"]) && isset($this->data["Password"])) {
			$email = $this-> data["username"];
			$password = $this-> data["Password"];
			$hackerDetails = $this-> Hacker-> findByEmail($email);
			?><pre><?php print_r($hackerDetails); ?> </pre> <?php
			
			if($hackerDetails["Hacker"]["password"] == sha1($password)){
				echo "you are success!";
				echo "<br> so excite!";
				session_start();
				$_SESSION['hackerid'] = $hackerDetails["Hacker"]["id"];
				$_SESSION['hackerUsername'] = $email;
				$this->redirect(array('controller' => 'applications', 'action' => 'index'));
			}
		}
	}
	
	function logout(){
		$this->Session->destroy();
		echo "You're logged out";
	}
	
	function index(){
		if(!isset($_SESSION['hackerid'])){
			throw new ForbiddenException('You must be logged in!');
		}
		
	}

}
