<?php

require('vendor/autoload.php');

echo "<h2>Faker</h2>";

echo "<h3>10 fake Swedish users</h3>";

$faker = Faker\Factory::create('sv_SE');

echo "<ul>";
for ($i = 0; $i < 10; $i++) {
	echo "<li>";
	echo "<strong>Name:</strong> {$faker->name()}<br>";
	echo "<strong>Address:</strong> {$faker->address()}<br>";
	echo "<strong>Email:</strong> {$faker->email()}<br>";
	echo "<strong>Phone:</strong> {$faker->phoneNumber()}";
	echo "</li>";
}
echo "</ul>";
