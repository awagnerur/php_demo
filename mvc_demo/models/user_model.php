<?php

include_once("models/user.php");

class UserModel {

	public function getUsers($columnTitle1, $columnTitle2, $columnTitle3) {
		$file = "../../etc/bluebeardpictures.com/phpdemo.ini";
		
		if (!$settings = parse_ini_file($file, TRUE)) throw new exception("Unable to open " . $file . ".");

		$host = $settings['database']['host'];
		$port = "8889";
		$userName = $settings['database']['userName'];
		$password = $settings['database']['password'];
		$schema = $settings['database']['schema'];

		$users = array();

		$connection = new mysqli($host, $userName, $password, $schema, $port);

		if ($connection->connect_errno) {
			die("Connection failed: " . $connection->connect_error);
		}

		$tableName = "users";

		$userQuery = "SELECT id, first_name, last_name, company_id FROM " . $tableName;

		$userQueryResult = $connection->query($userQuery);

		if ($userQueryResult->num_rows > 0) {
			while($userRow = $userQueryResult->fetch_assoc()) {
				$companyQuery = "SELECT name FROM company WHERE id=" . $userRow["company_id"];
				$companyQueryResult = $connection->query($companyQuery);
				$companyRow = $companyQueryResult->fetch_assoc();
				$users[] = array($columnTitle1 => $userRow["id"], $columnTitle2 => $userRow["first_name"]. " " . $userRow["last_name"], $columnTitle3 => $companyRow["name"]);
			}
		} 
		else {
			echo "0 results";
		}

		$connection->close();

		$usersSorted = array();

		if (isset($_GET['sortBy']))	{
			$usersSorted = $this->sortArray($_GET['sortBy'], $users);
		}
		else {
			$usersSorted = $this->sortArray($columnTitle1, $users);
		}

		return $usersSorted;
	}

	public function getUser($id, $columnTitle1, $columnTitle2, $columnTitle3) {
		$allUsers = $this->getUsers($columnTitle1, $columnTitle2, $columnTitle3);

		foreach ($allUsers as $user) {
			if ($user[$columnTitle1] == $id) {
				return $user;
			}
		}
		return "User with ID " . $id . " not found.";
	}

	private function sortArray($sortBy, $arrayToSort) {
		$keys = array();

		foreach ($arrayToSort as $row) {
			$keys[] = $row[$sortBy];
		}

		array_multisort($keys, SORT_ASC, $arrayToSort);

		return $arrayToSort;
	}
}
?>