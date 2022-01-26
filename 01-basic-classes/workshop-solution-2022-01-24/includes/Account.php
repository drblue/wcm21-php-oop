<?php

require_once('Transaction.php');

class Account {
	protected $accountNumber;
	protected $balance;
	protected $transactions = [];

	public function __construct(
		string $_accountNumber,
		float $_balance = 0
	) {
		$this->accountNumber = $_accountNumber;
		$this->balance = $_balance;
	}

	public function deposit(float $amount, string $description = null, string $date = null) {
		$this->balance += $amount;

		$transaction = new Transaction($amount, $description, $date);
		array_push($this->transactions, $transaction);
	}

	public function withdraw(float $amount, string $description = null, string $date = null) {
		$this->balance -= $amount;

		$transaction = new Transaction(-$amount, $description, $date);
		array_push($this->transactions, $transaction);
	}

	public function getAccountNumber(): string {
		return $this->accountNumber;
	}

	public function getBalance(): float {
		return $this->balance;
	}

	public function getTotalTransactions() {
		return count($this->transactions);
	}

	public function getTransactions() {
		return $this->transactions;
	}
}
