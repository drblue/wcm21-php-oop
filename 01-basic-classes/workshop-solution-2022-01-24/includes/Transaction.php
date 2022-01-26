<?php

class Transaction {
	protected $amount;
	protected $description;

	public function __construct($_amount, $_description) {
		$this->amount = $_amount;
		$this->description = $_description;
	}

	public function hasDescription() {
		return !is_null($this->description);
	}

	public function getAmount() {
		return $this->amount;
	}

	public function getDescription() {
		if (!$this->description) {
			return "No description provided";
		}

		return $this->description;
	}
}
