<?php

interface Drivable {
	public function drive();
}

interface Engine {
	public $fuel;
	public $horsepower;

	public function start();
	public function stop();
}

abstract class Vehicle {
	public $type = "Vehicle";
	public $manufacturer;
	public $model;
}

new Vehicle();

class Boat extends Vehicle implements Engine {
	public $type = "Boat";

	public function start() {
		return "Splash!";
	}

	public function stop() {
		return "<silence>";
	}
}

class Car extends Vehicle implements Drivable, Engine {
	public $type = "Car";
	public $wheels = 4;

	public function drive() {
		return "Such speed, much wow, very fast";
	}

	public function start() {
		return "Wrooom";
	}
	public function stop() {
		return "no wroom";
	}
}

class Bicycle extends Vehicle implements Drivable {
	public $type = "Bicycle";
	public $wheels = 2;
	public $engine = false;

	public function drive() {
		return "Rollin...";
	}
}

$vehicles = [
	new Vehicle(),
	new Car(),
	new Boat(),
	new Car(),
	new Bicycle(),
	new Boat(),
	new Car(),
];

foreach ($vehicles as $vehicle) {
	if ($vehicle instanceof Drivable) {
		echo "I can drive!<br>;";
		$vehicle->drive();
	}

	if ($vehicle instanceof Engine) {
		echo "I can haz engine!<br>";
		$vehicle->start();
		$vehicle->stop();
	}
}
