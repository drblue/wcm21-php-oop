<?php

require('./bootstrap/init.php');

use App\Models\Account;
use App\Models\User;

if (empty($_GET['id']) || empty($_GET['user_id'])) {
	die("No access for you!");
}

// get the user
$user_id = $_GET['user_id'];
$user = User::find($user_id);

// get user's account
$account_id = $_GET['id'];
$account = Account::find($account_id);

// render content
require(ROOT_PATH . '/views/account.view.php');
