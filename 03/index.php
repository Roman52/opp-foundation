<?php 	
/*
урок №3 знакомство с методами объектов
*/

error_reporting(-1);

require_once 'classes/Car.php';

$car1 = new Car();
$car1->color = 'Черный';
$car1->brand = 'Renault';

$car2 = new Car();
$car2->color = 'Черный';
$car2->brand = 'BMW';

echo $car1->getCarInfo();
echo $car2->getCarInfo();

