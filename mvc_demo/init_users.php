<?php 
	include_once("controllers/user_controller.php");

	$controller = new UserController();
	$controller->invoke();

?>