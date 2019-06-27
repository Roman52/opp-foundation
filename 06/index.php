<?php 	
/*
урок №6 константы, статические свойства, статические методы

Car::$countCar - таким образом мы можем обратиться к статическому свойству/методу класса
*/

// error_reporting(-1);

require_once 'classes/Car.php';

echo Car::$countCar;
echo '<br>';

$car1 = new Car('Черный', 4, 180, 'volvo');
echo Car::$countCar;
echo '<br>';
$car2 = new Car('Черный', 4, 200, 'bmw');

//обращаемся к статическому свойству
echo Car::$countCar;
echo '<br>';

//обращаемся к статическому методу
echo Car::getCount();

// echo $car1->getCarInfo();
// echo $car2->getCarInfo();

echo "<br>";

// теоретически возможно вызывать public методы так (раньше делали так)
echo $car1::Test();
// но не рекомендуеся - тк. в пхп 7 это приводит к ошибке (и в новых версиях ее уберут)

echo $car1->getPrototypeInfo();

echo "<hr>";

//также как и со статикой мы можем обратиться к константе через ::
echo Car::TEST_CAR;