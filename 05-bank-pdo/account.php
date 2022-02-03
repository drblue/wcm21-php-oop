<?php

require('bootstrap/app.php');
include('partials/header.php');

if (empty($_GET['id']) || empty($_GET['user_id'])) {
	die("Denied.");
}

$account_id = $_GET['id'];
$user_id = $_GET['user_id'];

$account = Account::get($account_id);
$user = User::get($user_id);

?>
	<h1><?php echo $account->accountnumber; ?></h1>

	<dl>
		<dt>Owner</dt>
		<dd><?php echo $user->getFullName(); ?></dd>

		<dt>Balance</dt>
		<dd><?php echo $account->balance; ?> kr</dd>
	</dl>

	<div class="row">
		<!-- deposit -->
		<div class="col">
			<form method="post" action="add_transaction.php" class="form">
				<input type="hidden" name="account_id" value="<?php echo $account->id; ?>" />
				<input type="hidden" name="user_id" value="<?php echo $user->id; ?>" />
				<input type="hidden" name="action" value="deposit" />

				<div class="mb-3">
					<input type="number" min="0" name="amount" class="form-control" />
				</div>

				<button type="submit" class="btn btn-success">Deposit</button>
			</form>
		</div>

		<!-- withdraw -->
		<div class="col">
			<form method="post" action="add_transaction.php" class="form">
				<input type="hidden" name="account_id" value="<?php echo $account->id; ?>" />
				<input type="hidden" name="user_id" value="<?php echo $user->id; ?>" />
				<input type="hidden" name="action" value="withdraw" />

				<div class="mb-3">
					<input type="number" min="0" name="amount" class="form-control" />
				</div>

				<button type="submit" class="btn btn-danger">Withdraw</button>
			</form>
		</div>
	</div>

<?php

include('partials/footer.php');
