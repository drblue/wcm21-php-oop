<?php

require('vendor/autoload.php');

use Carbon\Carbon;

echo "<h1>Demo of composer packages</h1>";

echo "<h2>Carbon</h2>";

$timeHere = Carbon::now('Europe/Stockholm');
$timeInTokyo = Carbon::now('Asia/Tokyo');

echo "The current time here is: {$timeHere}<br>";
echo "The current time in Tokyo is: {$timeInTokyo}<br>";
echo "<br>";

// $timeTomorrowHere = Carbon::now('Europe/Stockholm')->addDay();
// $timeLater = Carbon::now('Europe/Stockholm')->addDays(26);
$timeBefore = Carbon::now('Europe/Stockholm')->subYear()->subDay(3)->subMinutes(1)->subSeconds(30);
// echo "The current time tomorrow here is: {$timeTomorrowHere}<br>";
// echo "The current time later is: {$timeLater}<br>";
echo "The current time before is: {$timeBefore->diffForHumans()}<br>";

$tomorrow = Carbon::now()->addDay();
echo $tomorrow->locale('en')->isoFormat('dddd, MMMM Do YYYY, h:mm');
echo "<br>";
echo $tomorrow->diffForHumans();
