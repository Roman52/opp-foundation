<?php

function save_mess() {
	$str = $_POST['name'] . ' | ' . $_POST['text'] . ' | ' . date('Y-m-d H:i:s') . "\n***\n";

	file_put_contents('gb.txt', $str, FILE_APPEND);
}

function get_mess() {
	return file_get_contents('gb.txt');
}

function array_mess($messages) {
	$messages = explode("\n***\n", $messages);
	array_pop($messages);
	array_reverse($messages);

	return $messages;

}

function get_format_mess($message) {
	return explode('|', $message);

}