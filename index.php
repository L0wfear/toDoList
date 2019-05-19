<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans|Shadows+Into+Light+Two" rel="stylesheet">﻿
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>To do</title>
</head>
<body>
	<div class="list">
		<h1>To do</h1>
		<ul class="items">
			<li>
				<span class="item done">Do something </span>
			</li>
		<?php  $items = file("data.txt");
			   foreach ($items as $line_num => $line):
		 ?>
			<li>
				<span class="item"> <?php echo $line; ?></span>
				<a href="#">Mark as done</a>
			</li>
		<?php endforeach; ?>
		</ul>
		<form class="add-item" action="add.php" method="post">
			<input class="input" type="text" name="name" placeholder="Type a new item"  autocomplete="off" required>
			<input type="submit" value="Add" class="submit">
		</form>
	</div>
</body>
</html>