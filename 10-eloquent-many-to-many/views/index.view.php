<?php
include(ROOT_PATH . '/views/partials/header.php');
?>

	<h1>Students</h1>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Courses</th>
		</thead>
		<tbody>
			<?php foreach($students as $student): ?>
				<tr>
					<td>
						<?php echo $student->id; ?>
					</td>
					<td>
						<?php echo $student->name; ?>
					</td>
					<td>
						<?php echo $student->email; ?>
					</td>
					<td>

					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<h1>Courses</h1>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Students</th>
		</thead>
		<tbody>
			<?php foreach($courses as $course): ?>
				<tr>
					<td>
						<?php echo $course->id; ?>
					</td>
					<td>
						<?php echo $course->name; ?>
					</td>
					<td>

					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

<?php
include(ROOT_PATH . '/views/partials/footer.php');
