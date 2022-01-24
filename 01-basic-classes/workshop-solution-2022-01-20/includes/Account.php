<?php

class Account {
	protected $accountNumber;
	protected $balance;
	protected $owner;

	public function __construct(
		string $_accountNumber,
		string $_owner,
		float $_balance = 0
	) {
		$this->accountNumber = $_accountNumber;
		$this->owner = $_owner;
		$this->balance = $_balance;
	}

	public function deposit(float $amount) {
		// $this->balance = $this->balance + $amount;
		$this->balance += $amount;
	}

	public function withdraw(float $amount) {
		$this->balance -= $amount;
	}

	public function getAccountNumber(): string {
		return $this->accountNumber;
	}

	public function getBalance(): float {
		return $this->balance;
	}

	public function getOwner(): string {
		return $this->owner;
	}
}
