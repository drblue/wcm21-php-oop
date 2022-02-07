<?php
include(ROOT_PATH . '/views/partials/header.php');
?>

	<h1><?php echo $user->getFullName(); ?></h1>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Account Number</th>
			<th>Balance</th>
			<th>Actions</th>
		</thead>
		<tbody>
			<?php foreach($accounts as $account): ?>
				<tr>
					<td>
						<?php echo $account->id; ?>
					</td>
					<td>
						<?php echo $account->accountnumber; ?>
					</td>
					<td>
						<?php echo $account->balance; ?>
					</td>
					<td>
						<a href="account.php?id=<?php echo $account->id; ?>&user_id=<?php echo $user_id; ?>" class="btn btn-primary">View &raquo;</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

<?php
include(ROOT_PATH . '/views/partials/footer.php');
