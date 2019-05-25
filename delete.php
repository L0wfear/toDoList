<?php
	/* удаление из текстового файла
	$fd = fopen("data.php", 'a+');
	$items = file("data.php");
	ftruncate($fd, 0);
	unset($items[$_GET[id]]);
	for ($i=0; $i<=sizeof($items); $i++) { 
		fwrite($fd, $items[$i]);
	}
	fclose($fd);
	*/

	// удаление из json 
	$fd_json = fopen("./json/data.json", 'a+') or die("не удалось создать файл");
	$items = json_decode(file_get_contents("./json/data.json"), true);
	ftruncate($fd_json, 0);
	//находим ключ объекта в соответствии со значением id
	$key = array_search($_GET[id], array_column($items, "id"));
	unset($items[$key]);
	//после удаления объекта, числовой массив становится ассоциативным, поэтому записываем значения в новый массив
	$json_str = json_encode(array_values($items));
	fwrite($fd_json, $json_str);
	fclose($fd_json);

	header('Location: /');
?>