<?php 
/*
урок №5  Домашнее задание. Класс для работы с файлом 

Домашнее задание. Создать класс который будет работать с файлом. Будет что то записывать в файл.


Пример: http://ie2.php.net/manual/ru/function.fwrite.php#refsect1-function.fwrite-examples

в construct открыть файл для записи
метод, который что то запишет, передавать ему параметром строку для записи
в destruct закрыть файл после записи
*/

require_once 'classes/Write.php';

$file = new Write(__DIR__ . '/test.txt');
$file->writeToFile('123');
$file->writeToFile('123');
$file->writeToFile('123');
$file->writeToFile('123');
