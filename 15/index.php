<?php 
/*
Урок № 15 Позднее статическое связывание - мы можем присвоить (в случае нашего урока) значение константы или вывести константу не того класса где она объявлена, а того класса где она фактически используется. Для этого вместо слова ::self нужно использовать слово ::static. То есть если нам явно нужно указать что мы хотим взять какое то значение и если оно переопределено в классе наследнике, то юзаем ::static

 Еще одна тема - тема цепочки методов.
 В классе BookProduct.php добавим соме коде.
$book->doAction1()->$book->doAction2() - это и есть цепочка методов - вероятно я не буду юзать эту тему скоро, поэтому я чисто пробежался по уроку без подробных записей.

*/

use rz_core\interfaces\IGadget;
use app\BookProduct;
use app\LaptopProduct;

error_reporting(-1);

require_once __DIR__ . '/vendor/autoload.php';


function offerCase(IGadget $product) {
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new \app\BookProduct('Brave new world', 170, '200 страниц');
$laptop = new LaptopProduct('Macbook', '100000', 'core i7');

//offerCase($laptop);

//echo '<pre>';
//print_r($book);
//echo '</pre>';
//
//echo '<pre>';
//print_r($laptop);
//echo '</pre>';

$a = new \app\A();
$b = new \app\B();

$a->getTest();
echo '<br>';
$b->getTest();
echo '<br>';
$b->getTest();

$book->doAction1();
$book->doAction2();

var_dump( $book->doAction1() );
