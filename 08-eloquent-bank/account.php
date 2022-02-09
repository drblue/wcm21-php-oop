<?php

require('./bootstrap/init.php');

use App\Models\Account;
use App\Models\User;

if (empty($_REQUEST['id'])) {
	die("No access for you!");
}

// get user's account
$account_id = $_REQUEST['id'];
$account = Account::find($account_id);

// get the user
// $user = User::find($account->user_id);
// $user = $account->user;

// do we have a form request?
if (!empty($_POST['amount'])) {
	$account->balance += intval($_POST['amount']);
	$account->save();
}

// render content
require(ROOT_PATH . '/views/account.view.php');
