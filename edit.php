<?php
	$fd = fopen("data.php", 'a+');
	$items = file("data.php");
	fclose($fd);
?>

<link rel="stylesheet" type="text/css" href="css/styles.css">

<div class="list">
<form class="add-item" action="editCode.php?id=<?php echo $_GET[id]; ?>" method="post">
			<input class="input" type="text" name="name" placeholder="Change item" value="<?php echo $items[$_GET[id]]; ?>"  autocomplete="off">
			<input type="submit" value="Add" class="submit">
</form>
</div>


