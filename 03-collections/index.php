<?php

require_once('partials/header.php');
require_once('includes/helpers.php');
require_once('includes/Car.php');
require_once('includes/CarList.php');

$cars = new CarList("Bengans Bästa Begagnade Bilar");

$car = new Car("Tesla", "Model 3", 2020, 57000);
$car->setRegistrationNumber("WATT");
$car->drive(120);
$car->drive(2);
$car->drive(2);
$car->drive(21);
$car->drive(21);

// add car to list of cars
if ($cars->addCar($car)) {
	echo "Lade till {$car->getRegistrationNumber()} i listan över bilar.<br>";
} else {
	echo "FEL! Kunde inte lägga till {$car->getRegistrationNumber()} i listan över bilar.<br>";
}


$car = new Car("Nissan", "Qashqai", 2019, 5400);
$car->setRegistrationNumber("FUO102");

if ($cars->addCar($car)) {
	echo "Lade till {$car->getRegistrationNumber()} i listan över bilar.<br>";
} else {
	echo "FEL! Kunde inte lägga till {$car->getRegistrationNumber()} i listan över bilar.<br>";
}


$car = new Car("Porsche", "Taycan", null, 500);
$car->setRegistrationNumber("LOLGAS");

if ($cars->addCar($car)) {
	echo "Lade till {$car->getRegistrationNumber()} i listan över bilar.<br>";
} else {
	echo "FEL! Kunde inte lägga till {$car->getRegistrationNumber()} i listan över bilar.<br>";
}

pre($cars, "Cars");


/*
// get all cars
$cars->getCars();


// remove a car
$cars->removeCar("FUO102");

// find a car
$foundWatt = $cars->findCar("WATT");
*/




require_once('partials/footer.php');
