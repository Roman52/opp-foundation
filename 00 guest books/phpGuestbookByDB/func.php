<?php

function clear() {

	//очистка данных перед помещением в базу

	global $db;

	foreach ($_POST as $key => $value) {
		$_POST[$key] = mysqli_real_escape_string($db, $value);
	}
}

function save_mess() {
	global $db;
	/*
	$name = mysqli_real_escape_string($db, $_POST['name']); //каждое текстовое поле мы должны обрабатывать этой функцией. А если число то его нужно привести к числовому типу с помощью (int). Аксиома - обязательно юзать.
	$text = mysqli_real_escape_string($db, $_POST['text']);
	*/

	clear();
	extract($_POST);

	$query = "INSERT INTO gb (name, text) VALUES ('$name', '$text')";
	mysqli_query($db, $query);
}

function get_mess() {
	global $db;

	$query = "SELECT * FROM gb ORDER BY id DESC";
	$res = mysqli_query($db, $query);
	return mysqli_fetch_all($res, MYSQLI_ASSOC);
}