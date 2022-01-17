<?php

$cars = [
	[
		'manufacturer' => 'Kia',
		'model' => 'Picanto',
		'year' => 2015,
		'awd' => false,
	],
	[
		'manufacturer' => 'Tesla',
		'model' => 'Model 3',
		'year' => 2021,
		'awd' => true,
	],
	[
		'manufacturer' => 'Nissan',
		'model' => 'Qashqai',
		'year' => 2019,
		'awd' => false,
	],
	[
		'manufacturer' => 'Doge',
		'model' => 'Viper',
		'awd' => false,
	],
	[
		'model' => 'Batmobile',
		'awd' => true,
	],
	[
		'awesome' => true,
	],
	42,
	false,
];

function getCarInfo($car) {
	$manufacturer = 'N/A';
	$year = 'N/A';

	if (!is_array($car)) {
		return "Silly human.";
	}

	if (!isset($car['manufacturer']) && !isset($car['model'])) {
		return "That aint a car!";
	}

	if (isset($car['manufacturer'])) {
		$manufacturer = $car['manufacturer'];
	}

	if (isset($car['year'])) {
		$year = $car['year'];
	}

	return "Car is a {$manufacturer} {$car['model']} of year {$year}.<br>";
}

foreach($cars as $car) {
	echo getCarInfo($car);
}
