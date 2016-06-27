<!DOCTYPE html>
<html>
<style>
body {
  font: normal medium/1.4 sans-serif;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 0.25rem;
  text-align: left;
  border: 1px solid #ccc;
}
tbody tr:nth-child(odd) {
  background: #eee;
}
</style>
<body>


<?php
$serverName = "localhost";
$userName = "bluebear_demo1";
$password = "J00mL@1982";

$users = array();

$columnTitle1 = "ID";
$columnTitle2 = "Name";
$columnTitle3 = "Company";

$conn = new mysqli($serverName, $userName, $password, "bluebear_demo1");

if ($conn->connect_errno) {
	die("Connection failed: " . $conn->connect_error);
} 
$tablename = "users";
$sql = "SELECT id, first_name, last_name, company_id FROM " . $tablename;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$sql = "SELECT name FROM company WHERE id=" . $row["company_id"];
		$result2 = $conn->query($sql);
		$row2 = $result2->fetch_assoc();
		$users[] = array($columnTitle1 => $row["id"], $columnTitle2 => $row["first_name"]. " " . $row["last_name"], $columnTitle3 => $row2["name"]);
	}
} else {
	echo "0 results";
}

$usersSorted = array();

if (isset($_GET['sortBy']))
{
	$usersSorted = sortArray($_GET['sortBy'], $users);
}
else {
	$usersSorted = sortArray($columnTitle1, $users);
}
?>
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
			<td><?= $user[$columnTitle1] ?></td>
			<td><?= $user[$columnTitle2] ?></td>
			<td><?= $user[$columnTitle3] ?></td>
		</tr>
		<?php
	}?>
	</tbody>
</table>
<?php
$conn->close();

function sortArray($sortBy, $arrayToSort) {
	$keys = array();

	foreach ($arrayToSort as $row) {
		$keys[] = $row[$sortBy];
	}

	array_multisort($keys, SORT_ASC, $arrayToSort);

	return $arrayToSort;
}
?>

</body>
</html>