<?php

// lesson 4 методы
/*
__CLASS__ - волшебная константа которая возвращает название класса

this указатель на текущий объект
*/

class Product
{
    public ?string $title;
	public int|float $price;
}

$book = new Product();