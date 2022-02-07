<?php

require('./bootstrap/init.php');

use App\Models\Account;
use App\Models\User;

if (empty($_GET['id'])) {
	die("No access for you!");
}

// get the user
$user_id = $_GET['id'];
$user = User::find($user_id);

// get user's accounts
$accounts = Account::where('user_id', $user_id)->get();

// render content
require(ROOT_PATH . '/views/user.view.php');
