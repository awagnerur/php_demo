<!DOCTYPE html>
<html>
<head>
	<title>MVC PHP Demo Support</title>

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
	$currentTab = "support";

	include_once ("views/navbar.php"); 
?>

<div class="container main">
	<div class="jumbotron">
		<h1>Support my work!</h1>
		<p>Please support my work with constructive criticism.</p> 
 	</div>
	<div class="col-sm-push-1">
		<p>You can find the source code for this demo site on <a href="https://github.com/awagnerur/php_demo">GitHub</a>.</p>
		<p>This demo site is very basic just like my php knowledge, so I would love for you to look through the source code and let me know what you think I could imrpove. I'm not all clueless, especially when it comes to MVC, but obviously there is a lot I don't know about PHP best practices.</p>
		<p>Right now I'm in the beginning phase, I just started to build this site to try out and demo my abilities learning new technologies. I'm really excited about it and welcome every constructive criticism with explanation or examples.</p>
		<p>You can find my email address on the contact page. The phone number and address there are obviously fake. :)</p>
		<p>Thanks in advance,<br/>
			Val</p>
	</div>
</div>
</body>
</html>