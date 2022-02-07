<?php
include(ROOT_PATH . '/views/partials/header.php');
?>

	<h1><?php echo $user->getFullName(); ?></h1>
	<h2><?php echo $account->accountnumber; ?></h2>

	<p class="display-3 my-3">
		Balance: <?php echo $account->balance; ?> kr
	</p>

	<form method="POST" action="account.php">
		<input type="hidden" name="id" value="<?php echo $account->id; ?>" />
		<input type="hidden" name="user_id" value="<?php echo $user->id; ?>" />

		<div class="mb-3">
			<input type="number" class="form-control" name="amount" value="0" placeholder="Enter amount to deposit or withdraw" />
		</div>

		<button type="submit" class="btn btn-warning">Shut up and take my money!</button>
	</form>

<?php
include(ROOT_PATH . '/views/partials/footer.php');
