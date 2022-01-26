<?php

// add
// all
// count
// find
// remove

class CarList {
	protected $cars = [];
	protected $name;

	public function __construct(string $_name) {
		$this->name = $_name;
	}

	public function addCar(Car $car): bool {
		// Check that the car isn't already in the list before adding it
		if (in_array($car, $this->cars)) {
			return false;
		}

		// Add car to list
		array_push($this->cars, $car);

		// Great success!
		return true;
	}

	public function findByRegistrationNumber($registrationNumber) {
		foreach ($this->cars as $car) {
			if ($car->getRegistrationNumber() === $registrationNumber) {
				return $car;
			}
		}

		return false;
	}

	public function getCars() {
		return $this->cars;
	}

	public function getName(): string {
		return $this->name;
	}

}
