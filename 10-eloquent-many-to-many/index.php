<?php

require('./bootstrap/init.php');

use App\Models\Course;
use App\Models\Student;

// here be logic
$courses = Course::all();
$students = Student::all();

// render content
require(ROOT_PATH . '/views/index.view.php');
