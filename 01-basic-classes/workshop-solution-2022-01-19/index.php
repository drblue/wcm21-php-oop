<?php

require('includes/Car.php');
require('includes/Dump.php');

$cars = [];

$car = new Car("Doge", "Coin", 2022);
$car->setRegistrationNumber("2THEMOON");
$car->transmission = Car::$TRANSMISSION_MANUAL;
array_push($cars, $car);

$car = new Car("Shiba", "Inu", 2018, 180000);
$car->setRegistrationNumber("GOT CA\$H?");
$car->transmission = Car::$TRANSMISSION_AUTOMATIC;
array_push($cars, $car);

$car = new Car("Tesla", "Model 3", 2020, 58000);
$car->setRegistrationNumber("WATT");
$car->transmission = Car::$TRANSMISSION_AUTOMATIC;
array_push($cars, $car);

$car = new Car("Tesla", "Roadster 2"); // 2022
$car->setRegistrationNumber("NEED4SPEED");
array_push($cars, $car);

Dump::pre($cars);

foreach ($cars as $car) {
	echo "<p>";
	echo $car->getInfo();
	echo "<br>";
	if ($car->isAutomaticTransmission()) {
		echo "Car has automatic transmission.";
	}
	if ($car->isManualTransmission()) {
		echo "Car has manual transmission.";
	}
	echo "</p>";
}
