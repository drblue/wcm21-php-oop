<?php

require('includes/Horse.php');

echo "<h1>🥝🧺</h1>";

$fruit_basket = [];

$lillagubben = new Horse();
$lillagubben->name = "Little Gubb";
$lillagubben->breed = "Mustang";
$lillagubben->color = "pink";
$lillagubben->height = 210;
$lillagubben->weight = 650;
$lillagubben->sex = "gelding";
$lillagubben->setOwner("Billy");
array_push($fruit_basket, $lillagubben);

$storagumman = new Horse();
$storagumman->name = "Large Gum";
$storagumman->breed = "Pony";
$storagumman->color = "turquoise";
$storagumman->height = 150;
$storagumman->weight = 450;
$storagumman->sex = "mare";
$storagumman->setOwner("Karen");
array_push($fruit_basket, $storagumman);

foreach ($fruit_basket as $horse) {
	echo "<p>";
	echo $horse->getInfo();
	echo "<br>Owner (via owner property): {$horse->owner}";
	echo "<br>Owner (via getOwner method): {$horse->getOwner()}";
	echo "</p>";
}
