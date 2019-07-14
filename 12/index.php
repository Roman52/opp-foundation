<?php 
/*
 урок №12  Автозагрузка и пространства имен


 __autoload - магическая функция которая предосталсяется php (__ - это как правило магические функции в php) Данная функция является устаревшей. Данная функция создает авторазрузчик - это функция автозагрузки. Она нужна (она вызывается) в тот момент когда php встречает необходимость подключения какого нибудь класса и этот класс не подключен. То есть если где то мы создаем экземпляр класса и этот класс не был подключен с пом requre или include то соответственно php вторым шагом ищет функцию автозагрузки (__autoload) и если находит, он передает ей параметром имя класса который нужно подключить. И в этой функции __autoload мы можем определить, где искать этот класс и как его подключать. Эта ф-я является устаревшей - вместо нее рекомендуют юзать spl_autoload_register (с php 5.1 появилась).

 Автозагрузка нужна чтобы избежать множества requre в index.php. В приложении могут быть сотни, тысячи классов, библиотек и т.д.

 Как юзаем: автозагрузку - вместо requre_once для каждого файла

*/

error_reporting(-1);

//require_once 'classes/Product.php';
//require_once 'classes/I3d.php';
//require_once 'classes/IGadget.php';
//require_once 'classes/LaptopProduct.php';
//require_once 'classes/BookProduct.php';

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