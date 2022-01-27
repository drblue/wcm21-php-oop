<?php

require('bootstrap/app.php');
include('partials/header.php');

$users = User::getAll();
dump($users);

include('partials/footer.php');
