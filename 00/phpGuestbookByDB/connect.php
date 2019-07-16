<?php

/*
 * @mysqli_connect - @ пишется чтобы не выводились ошибки
 *
 * */

$db = @mysqli_connect('localhost', 'root', '', 'gb');
if ( ! $db ) die( mysqli_connect_error() );

mysqli_set_charset($db, 'utf8') or die('Не установлена кодировка');
