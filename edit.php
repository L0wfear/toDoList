<?php
	/* изменение в текстовом файле
	$fd = fopen("data.php", 'a+');
	$items = file("data.php");
	fclose($fd);
	*/

	// изменение в json
	$fd_json = fopen("./json/data.json", 'a+') or die("не удалось создать файл");
	$items = json_decode(file_get_contents("./json/data.json"), true);
	$key = array_search($_GET[id], array_column($items, "id"));
	fclose($fd_json);
?>

<link rel="stylesheet" type="text/css" href="css/styles.css">

<div class="list">
<form class="add-item" action="editCode.php?id=<?php echo $_GET[id]; ?>" method="post">
			<input class="input" type="text" name="name" placeholder="Change item" value="<?php echo $items[$key][name]; ?>"  autocomplete="off">
			<input type="submit" value="Add" class="submit">
</form>
</div>


