<?php

class Person {
	protected $first_name;
	protected $last_name;

	public function __construct($_first_name, $_last_name) {
		$this->first_name = $_first_name;
		$this->last_name = $_last_name;
	}

	public function getFirstName() {
		return $this->first_name;
	}

	public function getLastName() {
		return $this->last_name;
	}

	public function getFullName() {
		return "{$this->getFirstName()} {$this->getLastName()}";
	}
}
