<?php

require('./bootstrap/init.php');

use App\Models\User;

// here be logic
$users = User::all();

// here be output
include(ROOT_PATH . '/views/partials/header.php');
?>

	<h1>Welcome to Bank!</h1>

	<ul>
		<?php foreach($users as $user): ?>
			<li>
				<?php echo $user->id; ?>
				<?php echo $user->first_name; ?>
				<?php echo $user->last_name; ?>
			</li>
		<?php endforeach; ?>
	</ul>

<?php
include(ROOT_PATH . '/views/partials/footer.php');
