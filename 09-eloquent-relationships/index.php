<?php

require('./bootstrap/init.php');

use App\Models\Phone;
use App\Models\User;

// here be logic
$users = User::all();
$phones = Phone::all();

// render content
require(ROOT_PATH . '/views/index.view.php');
