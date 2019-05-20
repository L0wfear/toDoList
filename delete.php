<?php
	$fd = fopen("data.php", 'a+');
	$items = file("data.php");
	ftruncate($fd, 0);
	unset($items[$_GET[id]]);
	for ($i=0; $i<=sizeof($items); $i++) { 
		fwrite($fd, $items[$i]);
	}
	fclose($fd);
	header('Location: /');
?>