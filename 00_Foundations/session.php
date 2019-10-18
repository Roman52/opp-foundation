<?php

/* 
*** Порядок работы с сессиями
Сессия это файл который создается и хранится на сервере
1) Старт сессии
2) Инициализация сессионных переменных ($_SESSION['name'] = $_POST['name'];)
3) Закрытие сессии

до session_start() в браузер не должно ничего выводиться
 */
session_start();
/*** Проблема f5 - работа с сессиями ***/
if($_POST['submit']){
	$_SESSION['name'] = $_POST['name'];
	header("Location: session.php");
	exit;
}
var_dump($_SESSION['name']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Post Get header</title>
</head>
<body>
<form method="post">
	<label for="name">Имя:<input type="text" name="name"></label>
	<input type="submit" name="submit" value="GOIT">
</form>
</body>
</html>