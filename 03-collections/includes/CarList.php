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
		// TODO: Check that the car isn't already in the list before adding it

		// Add car to list
		array_push($this->cars, $car);

		// Great success!
		return true;
	}

	public function getName(): string {
		return $this->name;
	}

}
