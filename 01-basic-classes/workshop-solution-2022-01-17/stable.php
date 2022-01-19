<?php

require('includes/Horse.php');

echo "<h1>🥝🧺</h1>";

$lillagubben = new Horse();
$lillagubben->name = "Little Gubb";
$lillagubben->breed = "Mustang";
$lillagubben->color = "pink";

echo "<p>{$lillagubben->name} is a {$lillagubben->color} {$lillagubben->breed}.</p>";


$storagumman = new Horse();
$storagumman->name = "Large Gum";
$storagumman->breed = "Pony";
$storagumman->color = "turquoise";

echo "<p>{$storagumman->name} is a {$storagumman->color} {$storagumman->breed}.</p>";
