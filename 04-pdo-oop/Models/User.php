<?php

class User {
	protected int $id;
	protected string $first_name;
	protected string $last_name;
	protected string $email;

	public function getId(): int {
		return $this->id;
	}

	public function getFirstName(): string {
		return $this->first_name;
	}

	public function getLastName(): string {
		return $this->last_name;
	}

	public function getFullName(): string {
		return "{$this->getFirstName()} {$this->getLastName()}";
	}

	public function getEmail(): string {
		return $this->email;
	}
}
