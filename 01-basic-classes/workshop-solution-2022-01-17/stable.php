<?php

require('includes/Horse.php');

echo "<h1>🥝🧺</h1>";

$lillagubben = new Horse();
$lillagubben->name = "Little Gubb";
$lillagubben->breed = "Mustang";
$lillagubben->color = "pink";
$lillagubben->height = 210;
$lillagubben->weight = 650;
$lillagubben->sex = "gelding";

echo "<p>";
echo $lillagubben->getInfo();
echo "</p>";

$storagumman = new Horse();
$storagumman->name = "Large Gum";
$storagumman->breed = "Pony";
$storagumman->color = "turquoise";
$storagumman->height = 150;
$storagumman->weight = 450;
$storagumman->sex = "mare";

echo "<p>";
echo $storagumman->getInfo();
echo "</p>";
