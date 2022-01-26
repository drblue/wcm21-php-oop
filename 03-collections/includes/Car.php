<?php

// Klasser skrivs alltid med UpperCamelCase / PascalCase och i singular form
class Car {
	protected $manufacturer;
	protected $model;
	protected $year;
	protected $registrationNumber;
	protected $milage;

	public function __construct(string $manufacturer, string $model, $year = null, int $milage = 0) {
		$this->setManufacturer($manufacturer);
		$this->setModel($model);
		$this->setYear($year);
		$this->setMilage($milage);

		// profit 💰
	}

	/**
	 * getters and setters
	 */

	/* manufacturer */
	public function getManufacturer() {
		return $this->manufacturer;
	}
	protected function setManufacturer(string $manufacturer) {
		$this->manufacturer = $manufacturer;
	}

	/* milage */
	public function getMilage() {
		return $this->milage;
	}
	protected function setMilage(int $milage) {
		if (!is_numeric($milage) || $milage < 0) {
			return false;
		}

		$this->milage = $milage;
		return true;
	}

	/* model */
	public function getModel() {
		return $this->model;
	}
	protected function setModel(string $model) {
		$this->model = $model;
	}

	/* year */
	public function getYear() {
		return $this->year;
	}
	protected function setYear($year) { // $year = null
		if (is_int($year) && $year > 1900 && $year < 2030) { // only accept if year is 1901-2029
			$this->year = $year;
		} else {
			$this->year = date("Y"); // otherwise default to current year
		}
	}

	/* registrationNumber */
	public function getRegistrationNumber() {
		if ($this->hasRegistrationNumber()) {
			return $this->registrationNumber;
		} else {
			return "(ej registrerad)";
		}
	}
	public function hasRegistrationNumber() {
		return (!empty($this->registrationNumber));
	}
	public function setRegistrationNumber(string $registrationNumber) {
		$this->registrationNumber = $registrationNumber;
	}

	/**
	 * data methods
	 */

	public function drive(int $distance) {
		if (is_int($distance) && $distance > 0) {
			$currentMilage = $this->milage;
			$newMilage = $currentMilage + $distance;
			$this->setMilage($newMilage);

			return true;
		}

		return false;
	}

	public function getAge() {
		return date("Y") - $this->year;
	}

	public function getInfo() {
		return "Jag är en {$this->getManufacturer()} {$this->getModel()} av årsmodell {$this->getYear()} ({$this->getAge()} år gammal) med registreringsnummer {$this->getRegistrationNumber()} och mätarställning {$this->getMilage()} km.";
	}
}
