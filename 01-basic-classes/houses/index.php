<?php

require('includes/House.php');

$house1 = new House(12, 600, "Drottninggatan 4B, Malmö", 14);
echo "<pre>";
var_dump($house1);
echo "</pre>";

$house2 = new House(3, 85, "PHP-vägen 1, Lund"); // vi bygger ett nytt hus
echo "<pre>";
var_dump($house2);
echo "</pre>";

$house3 = new House(1, -300, "", false);
echo "<pre>";
var_dump($house3);
echo "</pre>";
