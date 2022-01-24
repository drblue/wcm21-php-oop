<?php

require_once('includes/Vehicles.php');
require_once('partials/header.php');

$car = new Car();

echo "Is car a Car? ";
var_dump($car instanceof Car);
echo "<br>";

echo "Is car a Vehicle? ";
var_dump($car instanceof Vehicle);
echo "<br>";

echo "<pre>";
var_dump($car);
echo "</pre>";
echo "<br>";

$bicycle = new Bicycle();
echo "Is bicycle a Car? ";
var_dump($bicycle instanceof Car);
echo "<br>";

echo "Is bicycle a Vehicle? ";
var_dump($bicycle instanceof Vehicle);
echo "<br>";

echo "<pre>";
var_dump($bicycle);
echo "</pre>";
echo "<br>";




require_once('partials/footer.php');
