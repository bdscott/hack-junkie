<?php
class CompetitionsController extends AppController {
<<<<<<< HEAD
	
		
	public $uses = array('Application', 'Competition', 'Hacker');
	
	
=======

	public $uses = array('Application');
>>>>>>> 1e8450dcb335d7a19e9a5f03b1ef9a613fd91e09

	function index() {

	}
<<<<<<< HEAD
	
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
		
=======

	public function upload() {
			$file = $this -> data["Competitions"]["file"];
			if ($file["error"] === UPLOAD_ERR_OK) {
				if (move_uploaded_file($file["tmp_name"], 'images\uploads\event-logos\\'.$file["name"])) {
						echo "Image Upload Successful!<br>";
					return true;
				}
			}
			else {
				echo "Invalid Image!";
			}
			return false;

>>>>>>> 1e8450dcb335d7a19e9a5f03b1ef9a613fd91e09
	}

};
