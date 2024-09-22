<?php 	
/*lll
урок №1 Класс и объект

класс - некий чертеж по которому создаются различные объекты (человек)
свойство класса - переменная описанная в классе (возраст, рост, вес)
метод класса - функция описаная в классе (что человек умеет делать)

Правило: - один класс должен располагаться в одном файле. Больше ничего не должно быть в этом файле. Имя файла должно совпадать с именем класса. Юзаем camel case.
Хотим заюзать - подключаем этот файл где нужно.

*/

require_once 'classes/FirstClass.php';

// Создать объект (экземпляр класса FirstClass)
$obj1 = new FirstClass();

var_dump($obj1);