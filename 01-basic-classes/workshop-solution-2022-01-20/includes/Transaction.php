<?php

class Transaction {
	protected $amount;
	protected $description;

	public function __construct($_amount, $_description) {
		$this->amount = $_amount;
		$this->description = $_description;
	}

	public function getAmount() {
		return $this->amount;
	}

	public function getDescription() {
		return $this->description;
	}
}
