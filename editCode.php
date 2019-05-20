<?php
	$fd = fopen("data.php", 'a+');
	$items = file("data.php");
	ftruncate($fd, 0);
	$items[$_GET[id]] = "$_POST[name] \r\n";
	for ($i=0; $i<=sizeof($items); $i++) { 
		fwrite($fd, $items[$i]);
	}
	fclose($fd);
	header('Location: /');
?>