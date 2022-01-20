<?php

require('includes/Car.php');

$cars = [];

$car = new Car();
$car->setManufacturer("Doge");
$car->setModel("Coin");
$car->setYear(2022);
$car->setRegistrationNumber("2THEMOON");
array_push($cars, $car);

$car = new Car();
$car->setManufacturer("Shiba");
$car->setModel("Inu");
$car->setYear(2018);
$car->setRegistrationNumber("GOT CA\$H?");
array_push($cars, $car);

// echo "<pre>";
// var_dump($cars);
// echo "</pre>";

foreach ($cars as $car) {
	echo "<p>{$car->getInfo()}</p>";
}
