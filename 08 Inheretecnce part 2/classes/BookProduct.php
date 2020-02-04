<?php 
class BookProduct extends Product {
	public $numPages;

	public function __construct($name, $price, $numPages) {

		parent::__construct($name, $price);
		//этой строкой мы обратились к родительскому классу и вызвали его метод в дочернем классе. Можно вызывать любой метод.

		$this->numPages = $numPages;

	}

	public function getProduct() {
		$out = parent::getProduct(); // получили в переменную результат работы родительского класса
 
		$out .= "Кол-во страниц: {$this->numPages}<br>"; // дописали новую функциональность в дочернем классе 

		return $out;
	}

	public function getNumPages() {
		return $this->numPages;
	}
}