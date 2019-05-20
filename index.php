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
		<?php  
			   $items = file("data.php");
			   for ($i=0; $i <sizeof($items); $i++):
		 ?>
			<li>
				<span class="item"> <?php echo $items[$i]; ?></span>
				<a  href="/delete.php?id=<?php echo $i ?>">Delete</a>
				<a  href="#">Edit</a>
			</li>
		<?php endfor; ?>
		</ul>
		<form class="add-item" action="add.php" method="post">
			<input class="input" type="text" name="name" placeholder="Type a new item"  autocomplete="off" required>
			<input type="submit" value="Add" class="submit">
		</form>
	</div>
</body>
</html>