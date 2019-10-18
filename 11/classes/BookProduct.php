<?php

class BookProduct extends Product implements I3D {
	public $numPages;

	public function __construct($name, $price, $numPages) {

		parent::__construct($name, $price);
		$this->numPages = $numPages;
		$this->setDiscount(5);
	}

	public function getProduct() {
		$out = parent::getProduct(); // получили в переменную результат работы родительского класса
 
		$out .= "Кол-во страниц: {$this->numPages}<br>"; // дописали новую функциональность в дочернем классе 
		$out .= "Цена без скидки: {$this->price}<br>"; 
		$out .= "Скидка: {$this->getDiscount()}%<br>";

		return $out;
	}

	public function getNumPages() {
		return $this->numPages;
	}

	// в дочернем классе мы обязаны описать метод который является абстрактным в родительском классе. Область видимости для метода в дочернем классе, который наследует абстрактный метод в родительском классе должна быть такой же или ниже. То есть в данном примере для метода addProduct мы можем поставить public или protected - т.к. у abstract protected function addProduct($name, $price) - в родительском классе имеет protected. Количество параметров тоже должно совпадать или можно дописать свой доп параметр сделав его не обязательным ($numPages = 0)
	public function addProduct($name, $price, $numPages = 0) {
		var_dump($name);
		var_dump($price);
		var_dump($numPages);
	}

	// реализуем интерфейс, который описан в родительском I3d.php
    public function test() {

	}
}