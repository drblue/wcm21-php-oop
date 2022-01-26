<?php

class Transaction {
	protected $amount;
	protected $description;
	protected $date;

	public function __construct($_amount, $_description, $_date) {
		$this->amount = $_amount;
		$this->description = $_description;

		if ($_date) {
			$this->date = $_date;
		} else {
			$this->date = date('Y-m-d');
		}

		// $this->date = ($_date) ? $_date : date('Y-m-d');  // shorter version of above using ternary operator
		// $this->date = ($_date) ?: date('Y-m-d');  // EVEN SHORTER version 🤯
	}

	public function hasDescription() {
		return !is_null($this->description);
	}

	public function getAmount() {
		return $this->amount;
	}

	public function getDate() {
		return $this->date;
	}

	public function getDescription() {
		if (!$this->description) {
			return "No description provided";
		}

		return $this->description;
	}
}
