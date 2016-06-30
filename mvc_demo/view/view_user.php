<!DOCTYPE html>
<html>
<head>
	<title>View User</title>

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

<?php include_once ("navbar.php"); ?>

<div class="container main">
	<div class="jumbotron">
		<h1>User details</h1>
		<p>Hit back to see full user list.</p> 
	</div>
	<div class="col-sm-push-1">
		UserId: <?= $user[$columnTitle1] ?><br/>
		Name: <?= $user[$columnTitle2] ?><br/>
		Company: <?= $user[$columnTitle3] ?><br/>
	</div>
	<div class="col-sm-push-1">
		<?php
			$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
			echo "<a href='$url' role='button' class='btn btn-primary'>Back to results</a>"; 
		?>
	</div>
</div>
</body>
</html>