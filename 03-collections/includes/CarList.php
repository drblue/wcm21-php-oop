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

	public function findByRegistrationNumber(string $registrationNumber) {
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

	public function removeCarByRegistrationNumber(string $registrationNumber): bool {
		// A more efficient (and also more advanced) way to remove an element from an array
		// $this->cars = array_filter($this->cars, function($car) use($registrationNumber) {
		// 	return $car->getRegistrationNumber() !== $registrationNumber;
		// });

		// return true;

		// find car by registration number
		$car = $this->findByRegistrationNumber($registrationNumber);
		if (!$car) {
			// DUDE - WHERE'S MY CAR?!
			return false;
		}

		// find position (index) of car
		$index = array_search($car, $this->cars);

		// remove element at $index from list
		array_splice($this->cars, $index, 1);

		return true;
	}
}
