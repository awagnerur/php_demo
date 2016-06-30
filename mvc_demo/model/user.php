<?php

class User {
	public $id;
	public $firstName;
	public $lastName;
	public $company;
	
	public function __construct($id, $name, $company) {
		$this->id = $id;
		$this->name = $name;
		$this->company = $company;
	}
}

?>