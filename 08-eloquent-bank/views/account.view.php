<?php
include(ROOT_PATH . '/views/partials/header.php');
?>

	<h1><?php echo $user->getFullName(); ?></h1>
	<h2><?php echo $account->accountnumber; ?></h2>

	<p class="display-3 my-3">
		Balance: <?php echo $account->balance; ?> kr
	</p>

<?php
include(ROOT_PATH . '/views/partials/footer.php');
