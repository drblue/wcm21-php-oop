<?php

require('includes/Car.php');

$cars = [];

$car = new Car("Doge", "Coin", 2022);
$car->setRegistrationNumber("2THEMOON");
array_push($cars, $car);

$car = new Car("Shiba", "Inu", 2018);
$car->setRegistrationNumber("GOT CA\$H?");
array_push($cars, $car);

$car = new Car("Tesla", "Model 3", 2020);
array_push($cars, $car);

// echo "<pre>";
// var_dump($cars);
// echo "</pre>";

foreach ($cars as $car) {
	echo "<p>{$car->getInfo()}</p>";
}
