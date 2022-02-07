<?php

require('./bootstrap/init.php');

use App\Models\Account;
use App\Models\User;

if (empty($_REQUEST['id']) || empty($_REQUEST['user_id'])) {
	die("No access for you!");
}

// get the user
$user_id = $_REQUEST['user_id'];
$user = User::find($user_id);

// get user's account
$account_id = $_REQUEST['id'];
$account = Account::find($account_id);

// do we have a form request?
if (!empty($_POST['amount'])) {
	$account->balance += intval($_POST['amount']);
	$account->save();
}

// render content
require(ROOT_PATH . '/views/account.view.php');
