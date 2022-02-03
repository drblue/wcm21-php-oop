<?php

require('bootstrap/app.php');
include('partials/header.php');

if (empty($_GET['id'])) {
	die("User appearance invalid.");
}

// get user
$id = $_GET['id'];
$user = User::get($id);

// get user's accounts
$accounts = Account::getWhereUserId($id);

?>
	<h1><?php echo $user->getFullName(); ?>'s accounts</h1>

	<table class="table table-striped">
		<thead>
			<th>Account Number</th>
			<th>Balance</th>
		</thead>
		<tbody>
			<?php foreach($accounts as $account): ?>
				<tr>
					<td>
						<a href="account.php?id=<?php echo $account->id; ?>&user_id=<?php echo $user->id; ?>">
							<?php echo $account->accountnumber; ?>
						</a>
					</td>
					<td>
						<?php echo $account->balance; ?> kr
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php

include('partials/footer.php');
