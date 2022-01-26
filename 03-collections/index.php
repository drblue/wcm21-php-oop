<?php

require_once('partials/header.php');
require_once('includes/Car.php');

// $cars = [];
$cars = new CarList();

$watt = new Car("Tesla", "Model 3", 2020, 57000);
$watt->setRegistrationNumber("WATT");
$watt->drive(120);
$watt->drive(2);
$watt->drive(2);
$watt->drive(21);
$watt->drive(21);
// array_push($cars, $watt);

// add car to list of cars
$res = $cars->addCar($watt);
if ($res) {
	echo "Lade till {$car->getRegistrationNumber()} i listan över bilar.<br>";
} else {
	echo "FEL! Kunde inte lägga till {$car->getRegistrationNumber()} i listan över bilar.<br>";
}

$qashqai = new Car("Nissan", "Qashqai", 2019, 5400);
$qashqai->setRegistrationNumber("FUO102");
// array_push($cars, $qashqai);

$lolgas = new Car("Porsche", "Taycan", null, 500);
$lolgas->setRegistrationNumber("LOLGAS");
// array_push($cars, $lolgas);


// get all cars
$cars->getCars();


// remove a car
$cars->removeCar("FUO102");


// find a car
$foundWatt = $cars->findCar("WATT");




require_once('partials/footer.php');
