<?php 
/*
в классах глобальная область видимости
*/
class Car
{
	//определяем свойства класса
	public $color;
	public $wheels = 4;
	public $speed = 180;
	var $brand; //можно иногда встретить -устаревшая фигня = public

	public $path = __DIR__ . '/test';
}
