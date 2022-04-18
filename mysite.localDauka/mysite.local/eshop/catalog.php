<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Каталог товаров</title>
</head>
<body>
<p>Товаров в <a href="basket.php">корзине</a>: <? $count?></p>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>В корзину</th>
</tr>
<?php
	$link = new mysqli('localhost', 'root', '', 'bakirovd');
	$result = $link -> query('SELECT * FROM Магазин');
	while($row=$result ->fetch_assoc()){
		echo "<tr>";
		echo "<th>";
		echo $row["Название"];
		echo "</th>";

		echo "<th>";
		echo $row["Автор"];
		echo "</th>";

		echo "<th>";
		echo $row["Год издания"];
		echo "</th>";

		echo "<th>";
		echo $row["Цена, руб."];
		echo "</th>";

		echo "<th>";
		echo "<input method='POST' type='checkbox' name='A'></input>";
		echo "</th>";
		echo "</tr>";
	}
?>
</table>
<?php
	echo "<br>";
	echo "<button>Добавить</button>";
	?>
</body>
</html>