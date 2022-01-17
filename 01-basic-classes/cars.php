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
	public $manufacturer = "N/A";
	public $model = "N/A";
	public $year = "N/A";
	public $awd = false;
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

// echo "<pre>";
// var_dump($carOne);
// var_dump($carTwo);
// echo "</pre>";

function getCarInfo($car) {
	if (!$car instanceof Car) {
		return "That ain't a car!";
	}

	return "Car is a $car->manufacturer $car->model of year $car->year.<br>";
}

echo "<h2>Car One</h2>";
echo getCarInfo($carOne);

echo "<h2>Car Two</h2>";
echo getCarInfo($carTwo);

echo "<h2>Car Three</h2>";
echo getCarInfo($carThree);

$mc = new MotorCycle();
echo "<h2>Mc</h2>";
echo getCarInfo($mc);

echo "<h2>42</h2>";
echo getCarInfo(42);

// echo "Car One is a " . get_class($carOne) . ".<br>";

// echo "Is Car One a Car? ";
// if ($carOne instanceof Car) {
// 	echo "yep";
// } else {
// 	echo "that aint a car of mine";
// }

// $mc = new MotorCycle();
// if ($mc instanceof Car) {
// 	echo "yep";
// } else {
// 	echo "that aint a car of mine";
// }
