<?php 
class Product {

	//только общие свойства в этом классе
	public $name;
	public $price;

	public function __construct($name, $price) {

		$this->name = $name;
		$this->price = $price;

	}

	public function getName() {
		return $this->name;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getProduct() {
		return "<hr><b>О товаре:</b><br>
			Наименование: {$this->name}<br>
			Цена: {$this->price}<br>
		";
	}
}