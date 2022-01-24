<?php

class Account {
	protected $accountNumber;
	protected $balance;
	protected $owner;
	protected $transactions = [];

	public function __construct(
		string $_accountNumber,
		string $_owner,
		float $_balance = 0
	) {
		$this->accountNumber = $_accountNumber;
		$this->owner = $_owner;
		$this->balance = $_balance;
	}

	public function deposit(float $amount, string $description) {
		// $this->balance = $this->balance + $amount;
		$this->balance += $amount;
		array_push($this->transactions, [
			'amount' => $amount,
			'description' => $description
		]);
	}

	public function withdraw(float $amount, string $description) {
		$this->balance -= $amount;
		array_push($this->transactions, [
			'amount' => -$amount,
			'description' => $description
		]);
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

	public function getTransactions() {
		return $this->transactions;
	}
}
