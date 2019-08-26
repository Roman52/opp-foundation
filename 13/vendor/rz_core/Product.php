<?php
namespace rz_core;

abstract class Product {

	public $name;
	protected $price;
	private $discount = 0;

	public function __construct($name, $price) {
		$this->name = $name;
		$this->price = $price;
	}

	public function getName() {
		return $this->name;
	}

	public function getPrice() {
		return $this->price - ($this->discount / 100 * $this->price);
	}

	public function getProduct() {
		return "<hr><b>О товаре:</b><br>
			Наименование: {$this->name}<br>
			Цена со скидкой: {$this->getPrice()}<br>
		";
	}


	//геттер для свойства discount
	public function getDiscount() : int {
		return $this->discount;
	}

	//сеттер для свойства discount
	public function setDiscount(int $discount) {
		$this->discount = $discount;
	}

	// абстрактный метод - он не может содержать тело метода (то что в {}). Абстрактные методы являются просто описательными. Они не должны содержать в себе реализацию
	abstract protected function addProduct($name, $price);

}