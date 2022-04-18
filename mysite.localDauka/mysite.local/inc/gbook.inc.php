<?php
/* Основные настройки */
	constant(DB_HOST='localhost');
	constant(DB_LOGIN='root');
	constant(DB_PASSWORD='');
	constant(DB_NAME='gbook');
	$link = mysqli_connect('localhost', 'root', '', 'gbook');
/* Основные настройки */

/* Сохранение записи в БД */
	$sql = "INSERT INTO msgs (name, email, msg) VALUES ('$name','$email', '$msg')";
	$result = mysqli_query($link, $sqlx);
/* Сохранение записи в БД */

/* Удаление записи из БД */

/* Удаление записи из БД */
?>
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
<?php
/* Вывод записей из БД */
	$sql1 = "SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt FROM msgs ORDER BY id DESC";
	$result1 = mysqli_query($link, $sql1);
	mysqli_close($link);
	echo "<p>";
	echo "Всего записей в гостевой книге: {$value}";
	echo "</p>";
/* Вывод записей из БД */
?>