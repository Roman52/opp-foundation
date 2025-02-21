<?php

// lesson 3 - свойства классов
/*
class Product{}
$product1 = new product() - будет работать, имена классов не чувствительны к регистру
имена переменных чувствительны к регистру
имена функций не чувствительны к регистру

typehinting - это указание типов при использовании
*/

class Product
{
    public ?string $title; // ?string - означает что здесь мб как null так и string те это = null|string по сути
	public int|float $price; // мб или int или float
}

$book = new Product();
// $book->testProperty = '123';
//php позволяет создавать динамические свойства которые не были определены в классе до версии 8.2, после получим deprecated ошибку
