<?php 
/*
метод __construct всегда вызывается (если он описан в классе) при создании нового экземпляра класса.
Все что мы передадим в круглых скобках при создании класса попадет в метод construct.

Метод __destruct срабатывает когда объект удаляется из памяти
*/

class Car
{
	//определяем свойства класса
	public $color;
	public $wheels;
	public $speed;
	public $brand; 

	public function __construct($color, $wheels = 4, $speed, $brand)
	{
		$this->color = $color;
		$this->wheels = $wheels;
		$this->speed = $speed;
		$this->brand = $brand;
	}

	public function __destruct()
	{
		var_dump($this);
	}

	//определяем метод класса
	public function getCarInfo() {
		return "<h3>О моем авто</h3>
		Марка: {$this->brand} <br>
		Цвет: {$this->color} <br>
		Кол во колес: {$this->wheels} <br>
		Скорость: {$this->speed} <br>
		";
	}

}
