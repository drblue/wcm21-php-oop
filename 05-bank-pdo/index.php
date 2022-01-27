<?php

require('bootstrap/app.php');

$users = User::getAll();
dump($users);
