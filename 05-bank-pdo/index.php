<?php

require('bootstrap/app.php');
include('partials/header.php');

use App\Models\User;

$users = User::getAll();

?>
	<h1>Users</h1>

	<ul>
		<?php foreach($users as $user): ?>
			<li>
				<a href="user.php?id=<?php echo $user->id; ?>">
					<?php echo $user->getFullName(); ?> &raquo;
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php

include('partials/footer.php');
