<?php

class Vehicle {
	public $type = "Vehicle";
	public $manufacturer;
	public $model;
}

class Car extends Vehicle {
	public $type = "Car";
	public $wheels = 4;
	public $engine = true;
}

class Bicycle extends Vehicle {
	public $type = "Bicycle";
	public $wheels = 2;
	public $engine = false;
}
