<?php 
class Prosuct {

	//общие свойства
	public $name;
	public $price;

	//раздельные свойства
	public $cpu;
	public $numPages;

	public function __construct($name, $price, $cpu = null, $numPages = null) {

		$this->name = $name;
		$this->price = $price;
		$this->cpu = $cpu;
		$this->numPages = $numPages;

	}

	//раздельный метод для ноутбуков
	public function getCpu() {
		return $this->cpu;
	}

	//раздельный метод для книг
	public function getNumPages() {
		return $this->numPages;
	}

	//общий метод
	public function getProduct($type = 'pc') {
		$out = "<hr><b>О товаре:</b><br>
			Наименование: {$this->name}<br>
			Цена: {$this->price}<br>
		";

		if ($type == 'pc') {
			$out .= "
			Процессор: {$this->cpu}<br>
			";
		} else {
			$out .= "
			Кол-во страниц: {$this->numPages}<br>
			";
		}

		return $out;
	}
}