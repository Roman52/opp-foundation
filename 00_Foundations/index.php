<?php

/*-_-1й урок Введение-_-*/

// $string = '<p>Это строка</p>';
// $num = 93;
// var_dump($string);
// var_dump($num);
// echo '<br>';
// $ar = array(1, 'two', 'tree', true);

// $st = 'Меня зовут ';
// $str = 'Роман';

// $st .= $str;
// echo $st;

/*-_- 2й урок Условия и циклы -_-*/

/*========whle========*/

// $i = 1;
// while ( $i < 10) {
// 	echo $i.'<br>';
// 	$i++;
// }

/*========dowhle========*/

// $i = 1;
// do{
// 	echo $i;
// 	$i++;
// }
// while ( $i < 10);

// echo '<hr>';

/*========for========*/

// for ($i=1; $i < 10; $i++) { 
// 	echo $i.'<br>';
// }

/*Практика таблица умножения*/

?>
<!-- <table border="1" align="center" cellspacing="0" cellpadding = "10"> -->

<?php
	// for ($big=1; $big <= 9; $big++) {  
	// 	echo '<tr>';
	// 	for ($smal=1; $smal <= 9 ; $smal++) { 
	// 		$rez = $big*$smal; 
	// 		echo '<td>';
	// 		echo "$big * $smal = $rez";
	// 		echo '</td>';
	// 	}
	// 	echo '</tr>';
	// }
?>
<!-- </table> -->

<?php 

//* ********************* Регулярные выражения ******************* *//

// $str = 'gray';

// $pattern = '#gr.y#';

// if(preg_match($pattern, $str)){
// 	echo "Строка |<b>$str</b>| <span style='color: green'>совпала</span> с шаблоном <b><em>$pattern</em></b>";
// }else{
// 	echo "Строка |<b>$str</b>| <span style='color: red'>не совпала</span> с шаблоном <b><em>$pattern</em></b>";
// }


?>


<?php 

// $array = array('Иванов', 'Петров', 'Сидоров');
// $array[] = 'Hello';
// $array[] = 'Hi';
// // $array[] = 'He';

// echo '<pre>';
// print_r($array);
// echo '</pre>';

// echo $array[0];

?>

<?php 

// * безопасность в php: *//
//********************************************************//

//все данные которые поступают в базу данных должны быть отфильтрованны.
//строковые данные должны обрабатываться функцией mysql_real_escape_string($_POST['content']); 
//а данные целочисленного типа должны явно приводиться к нему функцией (int) или (intval)

//вывод из базы данных таких полей как keywords, description(мета тегов) должен обрабатываться функцией htmlspecialchars() - сам контент статей соответственно не нужно

//Очистка данных (защита от инъекций)
function cleardata($var){
	$var = trim(mysql_real_escape_string($var));
	//этой обработки достаточно для очистки строковых данных

	//целочисленный тип данных нужно обрабатывать функцией (int) или ?int_val()?

	return $var;
}

//Очистка данных пользователя для вывода в браузер
function cleardataclient($var){
	$var = htmlspecialchars($var);
	//любые пользовательские данные которые мы выводим в браузер должны обрабатываться функцией htmlspecialchars()
	return $var;
}

?>








