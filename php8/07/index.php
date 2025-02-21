<?php

// lesson 7  Объект как аргумент метода
/*
в метод объекта мы можем передавать другой объект. Это удобно и уменьшает вероятность ошибок - тк указав что мы ожидаем на вход объект определенного класса - если не получаем его - то получаем ошибку
*/

class Product
{
	public function __construct(
		public string $title = 'Some title',
		public int $price = 0,
	)
	{
	}
}

$product = new Product('book', 100);

class Cart
{
	public array $data = [];

	//здесь вместо массива можно аргументом принять Product $product - так я говорю что на вход к методу add должен приходить экземпляр(объкет) класса Product. Свойства которые есть у объекта класса Poroduct также к нам поступят и мы можем с ними работать
	public function add(Product $product) : static
	{
		$this->data[] = $product;
		return $this;
	}

	public function getTotal(): int|float
	{
		$total = 0;
		foreach ($this->data as $item) {
			$total += $item->price;
		}
	}
}

$cart = new Cart();
$cart->add($product)->getTotal();