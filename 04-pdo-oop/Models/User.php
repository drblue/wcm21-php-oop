<?php

class User {
	protected $id;
	protected $first_name;
	protected $last_name;
	protected $email;

	public function getId() {
		return $this->id;
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

	public function getEmail() {
		return $this->email;
	}
}
