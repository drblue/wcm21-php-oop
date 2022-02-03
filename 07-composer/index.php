<?php

require('vendor/autoload.php');

use Carbon\Carbon;

echo "<h1>Demo of composer packages</h1>";

echo "<h2>Carbon</h2>";

$timeHere = Carbon::now();
$timeInTokyo = Carbon::now('Asia/Tokyo');

echo "The current time here is: {$timeHere}<br>";
echo "The current time in Tokyo is: {$timeInTokyo}<br>";
echo "<br>";
