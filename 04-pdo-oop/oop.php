<?php

require('includes/config.php');
require('includes/db.php');
require('Models/User.php');
require('Models/Employee.php');
require('Models/Student.php');

// get a new db handle
$dbh = db_init();

// prepare and execute a query for students
$student_query = $dbh->prepare("SELECT * FROM students");
$student_query->execute();

// get result as instances of the class Student
$students = $student_query->fetchAll(PDO::FETCH_CLASS, Student::class);

// prepare and execute a query for employees
$employee_query = $dbh->prepare("SELECT * FROM employees");
$employee_query->execute();

// get result as instances of the class Employee
$employees = $employee_query->fetchAll(PDO::FETCH_CLASS, Employee::class);

// show result
echo "<pre>";
echo "<h2>Employees</h2>";
var_dump($employees);
echo "</pre>";

echo "<ul>";
foreach ($students as $student) {
	echo "<li>";
	echo "{$student->getFullName()} ({$student->getEmail()}) #{$student->getId()}";
	echo "</li>";
}
echo "</ul>";
