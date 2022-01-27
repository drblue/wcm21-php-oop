<?php

require('bootstrap/app.php');
include('partials/header.php');

// $users = User::getAll();
// $accounts = Account::getAll();
// $account1 = Account::get(1);
// $johans_accounts = Account::getWhereUserId(1);

// dump($johans_accounts);
// dump($users);
// dump($accounts);

?>

	<h1>Users</h1>

	<ul>
		<li><a href="user.php?id=1">To User 1's accounts &raquo;</a></li>
		<li><a href="user.php?id=2">To User 2's accounts &raquo;</a></li>
	</ul>

<?php

include('partials/footer.php');
