<?php 	
/*
урок №4 Методы __construct и __destruct 

метод __construct всегда вызывается (если он описан в классе) при создании нового экземпляра класса.
Все что мы передадим в круглых скобках при создании класса попадет в метод construct. 

Метод __destruct срабатывает когда объект удаляется из памяти
*/

error_reporting(-1);

require_once 'classes/Car.php';

$car1 = new Car('Черный', 3, 180, 'volvo');

$car2 = new Car('Черный', 4, 200, 'bmw');

echo $car1->getCarInfo();
echo $car2->getCarInfo();

echo $car1->getText();
