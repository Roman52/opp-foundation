<?php 	
/*
урок №2 знакомство со свойствами объектов

-> - позволяет получить доступ к свойству или к методу класса
*/

error_reporting(-1);

require_once 'classes/Car.php';

$car1 = new Car();
$car2 = new Car();

echo '<pre>';
print_r($car1);
echo '</pre>';

//можно определять/переопределять/добавлять (добавлять не рекомендуется) свойства объекта вне рамок класса (если public)

$car1->color = 'Черный';
$car1->brand = 'Renault';
$car1->speed = 200;
$car1->year = 2019;

$car2->color = 'Белый';
$car2->brand = 'Volvo';
$car2->speed = 220;
$car2->year = 2020;


// echo '<pre>';
// print_r($car1);
// echo '</pre>';

// echo '<pre>';
// print_r($car2);
// echo '</pre>';

echo "<h3>О моем авто</h3>
Марка: {$car1->brand} <br>
Цвет: {$car1->color} <br>
Кол во колес: {$car1->wheels} <br>
Скорость: {$car1->speed} <br>
";

