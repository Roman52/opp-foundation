<?php 
class BookProduct extends Product {
	public $numPages;

	public function __construct($name, $price, $numPages) {

		parent::__construct($name, $price);

		$this->numPages = $numPages;

		// проверим, видны ли свойтва внутри дочернего класса - ответ да, видны, кроме private - он виден только в родительском классе
		// var_dump($this->public);
		// var_dump($this->protected);
		// var_dump($this->private);

		$this->setDiscount(5);

	}

	public function getProduct() {
		$out = parent::getProduct();
 
		$out .= "Кол-во страниц: {$this->numPages}<br>";
		$out .= "Цена без скидки: {$this->price}<br>"; 
		$out .= "Скидка: {$this->getDiscount()}%<br>"; 

		return $out;
	}

	public function getNumPages() {
		return $this->numPages;
	}
}