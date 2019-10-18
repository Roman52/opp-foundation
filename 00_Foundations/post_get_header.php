<?php
//header("Content-type: text/html; Charset=utf-8");
//header("Location: http://forweb52.ru");
//header("Location: redirect.php");
//header("Refresh: 3; url=redirect.php");
//exit("Через 5 секунд вы попадете в страну чудес");

/*
exit ставить обязательно, если мы делаем редирект, чтобы последующий код не выполнялся
*/

/*
echo "<a href='post_get_header.php?item_1=hello&item_2=Roman52'>Передача данных в скрипт методом GET</a>";

if($_GET){
	print_r($_GET);
}
*/
//любые данные приходящие из формы это строковый тип данных

/*** Проблема f5 - работа с сессиями см. файл session.php ***/
if($_POST['submit']){
	header("Location: post_get_header.php");
}

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