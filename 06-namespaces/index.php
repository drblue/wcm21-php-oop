<?php

// require('includes/User.php');
// require('lib/some-package/index.php');

use App\User;
use drblue\SomePackage\User as SomeUser;

$user = new User();
$user2 = new User();
$user3 = new User();

$some_user = new SomeUser();

// function do_stuff_with_user(App\User $user) {
// }

// $some_user = new drblue\SomePackage\User();

echo "<pre>";
var_dump($user);
var_dump($some_user);
echo "</pre>";
