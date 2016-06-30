<!DOCTYPE html>
<html>
<head>
	<title>MVC PHP Demo Home</title>

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
	$currentTab = "home";

	include_once ("views/navbar.php"); 
?>

<div class="container main">
	<div class="jumbotron">
		<h1>MVC PHP Demo</h1>
		<p>Basic site using php, mysql, html5, bootstrap, custom css building on the MVC framework.</p> 
 	</div>
	<div class="col-sm-push-1">
		<p>A very simple site built solely for demo purposes. I started learning PHP last week (June 20th 2016) to broaden my development experience after developing portlets and websites for Liferay portal for two years at Liferay Inc. in Diamond Bar.</p>
		<p>This demo site is very basic. I use a simple MySQL database I created with users, companies and company related information and query the database using mysqli in php. I don't use joins in the sql queries, I get raw data and build my arrays using php instead.</p>
		<p>Right now there's no persisting data, no user input, just simple queries. I plan to add a basic add / edit function for all tables with front-end (JS) and backend (PHP) validation to be as secure as possible.</p>
		<p>Also, the design is currently very basic as I was just trying to focus on PHO and backend stuff. However I'm planing to extend this to look more like an actual site with more appealing design.</p>
	</div>
</div>
</body>
</html>