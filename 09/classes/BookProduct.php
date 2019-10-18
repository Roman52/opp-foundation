<?php 
class BookProduct extends Product {
	public $numPages;

	public function __construct($name, $price, $numPages) {

		parent::__construct($name, $price);
		//этой строкой мы обратились к родительскому классу и вызвали его метод в дочернем классе. Можно вызывать любой метод.

		$this->numPages = $numPages;

		// проверим, видны ли свойтва внутри дочернего класса - ответ да, видны, кроме private - он виден только в родительском классе
		// var_dump($this->public);
		// var_dump($this->protected);
		// var_dump($this->private);

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
}