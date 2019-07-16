<?php 
/*
 урок №13 Composer и автозагрузка

*/

error_reporting(-1);

function autoloader($class) {
    $file = __DIR__ . "/classes/{$class}.php";

    if ( file_exists($file) ) {
        require_once $file;
    }

}
spl_autoload_register('autoloader');

function offerCase(IGadget $product) {
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new BookProduct('Brave new world', 170, '200 страниц');
$laptop = new LaptopProduct('Macbook', '100000', 'core i7');

var_dump($laptop instanceof IGadget);

offerCase($laptop);
//offerCase($book);

echo '<pre>';
print_r($book);
echo '</pre>';

echo $book->getProduct();

class A {};
class B extends A {};
class C {};

$a = new A;
$b = new B; // объект $b является экземкляром сразу двух классов A и B - т.к. класс B расщирятет класс А
$c = new C;

var_dump($a instanceof A); // мы фактически спрашиваем: является ли объект $a экземпляром класса A