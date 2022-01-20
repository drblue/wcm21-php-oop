<?php

class Car {
	protected $manufacturer;
	protected $model;
	protected $year;
	protected $registrationNumber;
	protected $mileage;
	public $transmission;
	public static $TRANSMISSION_AUTOMATIC = "automatic";
	public static $TRANSMISSION_MANUAL = "manual";

	public function __construct(
		string $manufacturer,
		string $model,
		$year = null,
		int $mileage = 0
	) {
		$this->setManufacturer($manufacturer);
		$this->setModel($model);
		$this->setYear($year);
		$this->setMileage($mileage);
	}

	public function isAutomaticTransmission() {
		return $this->transmission === static::$TRANSMISSION_AUTOMATIC;
	}

	public function isManualTransmission() {
		return $this->transmission === static::$TRANSMISSION_MANUAL;
	}

	public function getInfo(): string {
		return "Jag är en {$this->getManufacturer()} {$this->getModel()} av årsmodell {$this->getYear()} med registreringsnummer {$this->getRegistrationNumber()} och mätarställning {$this->getMileage()} km.";
	}

	/* manufacturer */
	public function getManufacturer(): string {
		return $this->manufacturer;
	}

	protected function setManufacturer(string $manufacturer) {
		$this->manufacturer = $manufacturer;
	}

	/* milage */
	public function getMileage(): int {
		return $this->mileage;
	}

	protected function setMileage(int $mileage) {
		$this->mileage = $mileage;
	}

	/* model */
	public function getModel(): string {
		return $this->model;
	}

	protected function setModel(string $model) {
		$this->model = $model;
	}

	/* year */
	public function getYear(): int {
		return $this->year;
	}
	protected function setYear($year) {
		if (is_null($year)) {
			$this->year = intval(date("Y"));
		} else {
			$this->year = $year;
		}

		// $this->year = is_null($year)
		// 	? intval(date("Y"))
		// 	: $year;
	}

	/* registrationNumber */
	public function getRegistrationNumber(): string {
		if (empty($this->registrationNumber)) {
			return "N/A";
		}
		return $this->registrationNumber;
	}
	public function setRegistrationNumber(string $registrationNumber) {
		$this->registrationNumber = $registrationNumber;
	}
}
