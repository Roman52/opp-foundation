<?php 

/*-_- 3й урок Массивы -_-*/


$house = array('Иванов','Петров', 'Сидоров');
$houseass = array('Иван' => 'Иванов', 'Петр' => 'Петров', 'Сидор' => 'Сидоров');


foreach ($house as $key) {
	echo $key.'<br />';
}

echo '<hr>';


/*выводим  еще и ключи*/

foreach ($houseass as $key => $value) {
	echo $key." ".$value.'<br />';
}

echo '<hr>';

/*Работа с массивами обычными циклами*/

/*while*/

$houselengh = count($house);
$i = 0;
while ($i <= $houselengh) {
	echo $house[$i].'<br/>';
	$i++;
}

echo '<hr>';

/*for*/

for ($j=0; $j < $houselengh ; $j++) { 
	echo $house[$j].'<br/>';
}

# Почему нужно объявлять что это массив заранее (раскоментировать и посмотреть на тип данных $arr)
// $arr = [];
for ($i = 0; $i < 0; $i++) { 
	$arr[] = $i;
}
var_dump($arr);























 ?>