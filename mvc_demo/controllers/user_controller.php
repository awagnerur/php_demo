<?php

include_once("models/user_model.php");

class UserController {
	public $model;

	public function __construct() {
		$this->model = new UserModel();
	}
	
	public function invoke() {
		$columnTitle1 = "ID";
		$columnTitle2 = "Name";
		$columnTitle3 = "Company";

		if (!isset($_GET['userId'])) {
			$usersSorted = $this->model->getUsers($columnTitle1, $columnTitle2, $columnTitle3);

			include 'views/view_users.php';
		}
		else {
			$user = $this->model->getUser($_GET["userId"], $columnTitle1, $columnTitle2, $columnTitle3);

			include 'views/view_user.php';
		}
	}
} 
?>