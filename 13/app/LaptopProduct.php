<?php

namespace app;

use rz_core\interfaces\IGadget;
use rz_core\Product;

class LaptopProduct extends Product implements IGadget {
	public $cpu;

	public function __construct($name, $price, $cpu) {

		parent::__construct($name, $price);
		//этой строкой мы обратились к родительскому классу и вызвали его метод в дочернем классе. Можно вызывать любой метод.

		$this->cpu = $cpu;
	}

	public function getCase() {
        // TODO: Implement getCase() method.
    }

    public function getProduct() {
		$out = parent::getProduct(); // получили в переменную результат работы родительского класса

		$out .= "Процессор: {$this->cpu}<br>"; // дописали новую функциональность в дочернем классе

		return $out;
	}

	public function getCpu() {
		return $this->cpu;
	}

	public function addProduct($name, $price, $numPages = 0) {
		var_dump($name);
		var_dump($price);
		var_dump($numPages);
	}
}