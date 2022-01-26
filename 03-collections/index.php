<?php

require_once('partials/header.php');
require_once('includes/helpers.php');
require_once('includes/Car.php');
require_once('includes/CarList.php');

$cars = new CarList("Bengans Bästa Begagnade El-Bilar");

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

pre($cars, "Cars before remove of FUO102");

// remove that 🦖-car FUO102
$cars->removeCarByRegistrationNumber("FUO102");

pre($cars, "Cars after remove of FUO102");

// get all cars
echo "<h2>{$cars->getName()}</h2>";
echo "<ul>";
foreach ($cars->getCars() as $car) {
	echo "<li>{$car->getInfo()}</li>";
}
echo "</ul>";

require_once('partials/footer.php');
