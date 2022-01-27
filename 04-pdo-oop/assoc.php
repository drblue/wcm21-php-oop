<?php

require('includes/config.php');
require('includes/db.php');

// get a new db handle
$dbh = db_init();

// prepare and execute a query
$query = $dbh->prepare("SELECT * FROM students");
$query->execute();

/*
// get result as an associative array
$students_assoc = $query->fetchAll(PDO::FETCH_ASSOC);

// show result
echo "<pre>";
echo "<h2>Students associative</h2>";
var_dump($students_assoc);
echo "</pre>";

// run query again
$query->execute();
*/

// get result as objects
$students_obj = $query->fetchAll(PDO::FETCH_OBJ);  // we have no idea (based on the result) where this data came from. Are they students? Are they employees? Are they zombies due to lack of coffee? YES!

// show result
echo "<pre>";
echo "<h2>Students objects</h2>";
var_dump($students_obj[0]);
echo "</pre>";

// prepare and execute a query for employees
$query = $dbh->prepare("SELECT * FROM employees");
$query->execute();

// get employees as objects
$employees_obj = $query->fetchAll(PDO::FETCH_OBJ);

// show result
echo "<pre>";
echo "<h2>Employee objects</h2>";
var_dump($employees_obj[0]);
echo "</pre>";

$mix = [$students_obj[0], $employees_obj[0]];
// show result
echo "<pre>";
echo "<h2>🥵</h2>";
var_dump($mix);
echo "</pre>";
