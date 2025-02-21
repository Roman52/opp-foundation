<?php

// lesson 5 цепочки методов
/*
:void - ничего не возвращает, те return в нем нет
:static - указатель на текущий класс (будет возвращен объект текущего класса)
*/

class Cart
{
	public array $data = [];

	public function add(array $product) : static
	{
		$this->data[] = $product;
		return $this;
	}

	public function getTotal(): int|float
	{
		$total = 0;
		foreach ($this->data as $item) {
			$total += $item['price'];
		}
	}
}

$cart = new Cart();
$cart->add(['title' => 'book1', 'price' => '100'])->getTotal();
//мы можем вызывать методы по цепочке если только предыдущий в цепочке возвращает объект, те в данном случае первый метод add возвращает объект

//echo '<pre>';
//print_r($cart);
//echo '</pre>';