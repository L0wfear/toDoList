<?php
	/* изменение в текстовом файле
	$fd = fopen("data.php", 'a+');
	$items = file("data.php");
	ftruncate($fd, 0);
	$items[$_GET[id]] = "$_POST[name] \r\n";
	for ($i=0; $i<=sizeof($items); $i++) { 
		fwrite($fd, $items[$i]);
	}
	fclose($fd);
	*/

	// изменение в json
	$fd_json = fopen("./json/data.json", 'a+') or die("не удалось создать файл");
	$items = json_decode(file_get_contents("./json/data.json"), true);
	ftruncate($fd_json, 0);
	$key = array_search($_GET[id], array_column($items, "id"));
	$items[$key][name] = "$_POST[name]";
	$json_str = json_encode($items);
	fwrite($fd_json, $json_str);
	fclose($fd_json);


	header('Location: /');
?>