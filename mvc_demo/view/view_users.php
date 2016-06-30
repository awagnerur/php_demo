<!DOCTYPE html>
<html>
<head>
	<title>View Users</title>

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

<div class="container" id="main_container">
	<div class="jumbotron">
		<h1>List of users</h1>
		<p>Click on the title to re-order and click on a row to see employee data.</p> 
 	</div>

	<table>
		<thead> 
			<tr> 
				<th><a href="?sortBy=<?= $columnTitle1 ?>"><?= $columnTitle1 ?></a></th> 
				<th><a href="?sortBy=<?= $columnTitle2 ?>"><?= $columnTitle2 ?></a></th>
				<th><a href="?sortBy=<?= $columnTitle3 ?>"><?= $columnTitle3 ?></a></th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($usersSorted as $user) {
					?>
					<tr>
						<td><a href="?userId=<?= $user[$columnTitle1] ?>"><?= $user[$columnTitle1] ?></a></td>
						<td><a href="?userId=<?= $user[$columnTitle1] ?>"><?= $user[$columnTitle2] ?></a></td>
						<td><a href="?userId=<?= $user[$columnTitle1] ?>"><?= $user[$columnTitle3] ?></a></td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</div>
</body>
</html>