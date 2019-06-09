<?php 

/*
если мы юзаем extends, фактически как будто мы взяли весь код родительского класса и скопировали в дочерний (или заюзали requre)
*/

class LaptopProduct extends Product {
	public $cpu;

	public function __construct($name, $price, $cpu) {

		parent::__construct($name, $price);
		//этой строкой мы обратились к родительскому классу и вызвали его метод в дочернем классе. Можно вызывать любой метод.

		$this->cpu = $cpu;

	}

	public function getProduct() {
		$out = parent::getProduct(); // получили в переменную результат работы родительского класса
 
		$out .= "Процессор: {$this->cpu}<br>"; // дописали новую функциональность в дочернем классе 

		return $out;
	}

	public function getCpu() {
		return $this->cpu;
	}
}