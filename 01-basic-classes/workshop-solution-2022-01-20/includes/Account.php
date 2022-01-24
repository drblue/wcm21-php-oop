<?php

class Account {
	protected $accountNumber;
	protected $balance;

	public function __construct(string $_accountNumber, float $_balance = 0) {
		$this->accountNumber = $_accountNumber;
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
}
