<?php 
	include_once("controllers/user_controller.php");

	echo "controller?";

	$controller = new UserController();
	$controller->invoke();
?>