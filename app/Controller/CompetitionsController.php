<?php
class CompetitionsController extends AppController {

	public $uses = array('Application');

	function index() {

	}

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

	}

};
