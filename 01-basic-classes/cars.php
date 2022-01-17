<?php

/**
 * Inom OOP fins följande
 *
 * Klasser = Classes
 * Egenskaper = Properties (attributes)
 * Metoder = Methods
 * Instanser = Instances
 * Objekt = Object
 */

// Klasser skrivs alltid i singular form och med UpperCamelCase / PascalCase
class Car {
	public $manufacturer;
	public $model;
	public $year;
	public $awd = false;

	public function getInfo() {
		$msg = "Car is a";
		if ($this->manufacturer) {
			$msg .= " {$this->manufacturer}";
		}
		if ($this->model) {
			$msg .= " {$this->model}";
		}
		if ($this->year) {
			$msg .= " {$this->year}";
		}
		return "{$msg}.<br>";
	}
}

class MotorCycle {}

// ett objekt som är en instans av klassen Car
$carOne = new Car();
$carOne->manufacturer = "Kia";
$carOne->model = "Picanto";
$carOne->year = 2015;

$carTwo = new Car();
$carTwo->manufacturer = "Doge";
$carTwo->model = "Viper";

$carThree = new Car();
$carThree->model = "Batmobile";

$mc = new MotorCycle();

// echo "<pre>";
// var_dump($carOne);
// var_dump($carTwo);
// echo "</pre>";

$garage = [
	$carOne,
	$carTwo,
	$carThree,
];

foreach($garage as $car) {
	echo $car->getInfo();
}

// echo "<pre>";

// echo "<h2>Car One</h2>";
// echo $carOne->getInfo();

// echo "<h2>Car Two</h2>";
// echo $carTwo->getInfo();

// echo "<h2>Car Three</h2>";
// echo $carThree->getInfo();

// echo "</pre>";
