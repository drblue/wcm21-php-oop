<?php
include(ROOT_PATH . '/views/partials/header.php');
?>

	<h1>Users</h1>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Phone</th>
		</thead>
		<tbody>
			<?php foreach($users as $user): ?>
				<tr>
					<td>
						<?php echo $user->id; ?>
					</td>
					<td>
						<?php echo $user->getFullName(); ?>
					</td>
					<td>
						<?php
							if (count($user->phones) > 0) {
								foreach ($user->phones as $phone) {
									echo $phone->model . "<br>";
								}
							} else {
								echo "-";
							}
						?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<h1>Phones</h1>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Model</th>
			<th>IMEI</th>
			<th>User</th>
		</thead>
		<tbody>
			<?php foreach($phones as $phone): ?>
				<tr>
					<td>
						<?php echo $phone->id; ?>
					</td>
					<td>
						<?php echo $phone->model; ?>
					</td>
					<td>
						<?php echo $phone->imei; ?>
					</td>
					<td>
						<?php
							if ($phone->user) {
								echo $phone->user->getFullName();
							} else {
								echo "-";
							}
						?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

<?php
include(ROOT_PATH . '/views/partials/footer.php');
