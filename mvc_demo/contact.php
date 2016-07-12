<!DOCTYPE html>
<html>
<head>
	<title>MVC PHP Demo Contact</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<style>
	<?php include_once ("css/mvc_demo.css"); ?>
</style>

<body>

<?php 
	$currentTab = "contact";

	include_once ("views/navbar.php"); 
?>

<div class="container main">
	<div class="jumbotron">
		<h1>Contact me!</h1>
 	</div>
	<div class="col-sm-push-1">
		<p>Cell phone: 123-456-7890</p>
		<p>Address: 123 First street, Megacity, 12345</p>
		<p>Email: awagnerur@gmail.com</p>
		<p>The phone number and address there are obviously fake but the email is real, contact me with comments about the code. :)</p>
		<p>Thanks in advance,<br/>
			Val</p>
	</div>
</div>
</body>
</html>