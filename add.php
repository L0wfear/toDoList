<?php
	$fd = fopen("data.txt", 'a+') or die("не удалось создать файл");
	$str = "$_POST[name] \r\n";
	fwrite($fd, $str);
	fclose($fd);
	header('Location: /');
?>
