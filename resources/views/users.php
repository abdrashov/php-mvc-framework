<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP MVC Framework</title>
</head>
<body>
	<h1>PHP MVC Framework</h1>
	<table border="1">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Link</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users as $user): ?>
			<tr>
				<th><?= $user->id ?></th>
				<td><?= $user->name ?></td>
				<td><?= $user->email ?></td>
				<td><a href="<?= url('?user='.$user->id) ?>">link</a></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>