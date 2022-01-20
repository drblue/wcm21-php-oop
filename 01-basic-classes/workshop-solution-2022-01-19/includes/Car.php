<?php

class Car {
	protected $manufacturer;
	protected $model;
	protected $year;
	protected $registrationNumber;

	public function __construct(
		string $manufacturer,
		string $model,
		int $year
	) {
		$this->setManufacturer($manufacturer);
		$this->setModel($model);
		$this->setYear($year);
	}

	public function getInfo(): string {
		return "Jag är en {$this->getManufacturer()} {$this->getModel()} av årsmodell {$this->getYear()} med registreringsnummer {$this->getRegistrationNumber()}.";
	}

	/* manufacturer */
	public function getManufacturer(): string {
		return $this->manufacturer;
	}

	protected function setManufacturer(string $manufacturer) {
		$this->manufacturer = $manufacturer;
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
	protected function setYear(int $year) {
		$this->year = $year;
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
