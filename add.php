<?php
	/* запись в текстовый файл
	$fd = fopen("data.php", 'a+') or die("не удалось создать файл");
	$str = "$_POST[name] \r\n";
	fwrite($fd, $str);
	fclose($fd);
	*/


	// запись в json
	function jsonAdd () {
			  // объект, который будет добавлен в массив
			  $json_arr = array("id" => "0", "name" => "$_POST[name]", "date" => strval(date('l jS \of F Y h:i:s A')));
			  //получаем массив объктов из файла	
			  $json = json_decode(file_get_contents("./json/data.json"), true);
			  //проверяем, существует ли файл
			  if (!$json) {
			  //если не существует, создаем и записываем туда массив с объектом
			  	$json_str = json_encode(array($json_arr));
			  }
			  else {
			  	//инкримент id нового объекта на 1
			  	$json_arr[id] = strval($json[sizeof($json) - 1][id] + 1);
			  	array_push($json, $json_arr);
			  	$json_str = json_encode($json);
			  }
			  
			  $json_fd = fopen("./json/data.json", 'a+') or die("не удалось создать файл");
			  ftruncate($json_fd, 0);
			  fwrite($json_fd, $json_str);
			  fclose($json_fd);
			  }

			  jsonAdd ();


	header('Location: /');
?>
