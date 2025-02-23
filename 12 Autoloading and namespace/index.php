<?php 
/*
урок №12  Автозагрузка и пространства имен


__autoload - магическая функция которая предосталсяется php (__ - это как правило магические функции в php) Данная функция является устаревшей. Данная функция создает авторазрузчик - это функция автозагрузки. Она нужна (она вызывается) в тот момент когда php встречает необходимость подключения какого нибудь класса и этот класс не подключен. То есть если где то мы создаем экземпляр класса и этот класс не был подключен с пом requre или include то соответственно php вторым шагом ищет функцию автозагрузки (__autoload) и если находит, он передает ей параметром имя класса который нужно подключить. И в этой функции __autoload мы можем определить, где искать этот класс и как его подключать. Эта ф-я является устаревшей - вместо нее рекомендуют юзать spl_autoload_register (с php 5.1 появилась).

Автозагрузка нужна чтобы избежать множества requre в index.php. В приложении могут быть сотни, тысячи классов, библиотек и т.д.

Как юзаем: автозагрузку - вместо requre_once для каждого файла вызываем функфию spl_autoload_register('autoloader'); - autoloader здесь - это название функции, в которой нужно описать работу с автозагрузгой файлов (по типу повесили на хук.)

MVC - модель вид контроллер. Делит наш код на логические части. Модели работают с данными, виды представляют эти данные, контроллеры - являются обработчиками запросов, которые запрашивают нужные модели и передают полученные данные в нужные виды.
К чему это я - вообще в ооп, в сторонних библиотеках, а также в mvc принято раскидывать классы по папкам. Переда нами встает проблема структурирования всех этих классов.
Здесь нам помогает функция spl_autoload_register. ЕЕ преимущество перед устаревшей __autoload в том, что мы можем зарегистрировать несколько функций автозагрузки. (По типу повесить на один хук сколько угодно функций.) Пример:
spl_autoload_register('autoloader1');
spl_autoload_register('autoloader2');

PHP вызовит их в порядке очереди. Можно менять очередность передавая третий параметр в эту функцию.

Для больших приложений создавать множество функций автозагрузки (spl_autoload_register) все равно не удобно. В этом случае используют пространства имен.

------------------------------------------------------ПРОСТРАНСТВА ИМЕН-----------------------------------------------------------
Они нужны в первую очередь чтобы избежать конфликта имен. Возьмем к примеру mvc - у нас могут быть модели, контроллеры и зачастую их именуют одинаково. Так же могут быть сторонние библиотеки и тд и все они могут именоваться одинаково. У нас например может быть класс юзер и в сторонней библиотеке тоже может быть класс юзер.

В каждом классе есть константа class (в __construct var_dump self::class) она возвращает имя класса. Смысл в ней появляется когда мы начинаем использовать пространства имен.
Пространства имен указываются с помощью ключевого слова namespace которое должно идти в самом начале перед основным кодом, перед объявлением класса мы указываем namespace. В качестве namespace принято указывать путь к данному классу начиная от глобального пространства имен, то есть от корня нашего приложения. Используются обратные слэши.

Теперь, когда мы указали пространство имен, наш класс называется classes\BookProduct а не просто BookProduct (то же самое с интерфейсами и всеми другими классами). И нужно создавать экземпляр класса уже так:
$book = new \classes\BookProduct('Brave new world', 170, '200 страниц');

namespace позволяет не плодить кучу автозагрузчиков. Потому что нам нужно только имя класса, а путь в namespace.



-------------------------------------------------------------USE---------------------------------------------------
Это ключевое слово которое мы можем юзать чтобы каждый раз не писать \classes\ ( $a = new \classes\BookProduct ) можно один раз в начале файла написать use, и указать какие классы мы хотим использовать. И дальле можно уже у каждого класса не дописывать \classes\название класса. Пример

use classes\BookProduct;
use classes\LaptopProduct;

$book = new BookProduct('Brave new world', 170, '200 страниц');
$book1 = new BookProduct('Brave new world 1', 222, '2200 страниц');

$laptop = new LaptopProduct('Macbook', 3000);

----------------------------------------Проблема с прямым и обратным слешем-------------------------------------------

Если посмотреть на путь в автозагрузчике то увидим G:\OpenServer\OSPanel\domains\php.loc\12/classes\BookProduct.php - разные слэши.
Винде по фиг она работает с обоими видами слешей в пути, а вот линукс требует \ обратный слеш обязательно.

Поэтому в функции автозагрузки нужно заюзать замену php.loc\12/classes\BookProduct.php на php.loc\12/classes/BookProduct.php. Для этого юзаем $class = str_replace("\\", '/', $class); в функции автозагрузки.

*/

use classes\BookProduct;
use classes\interfaces\IGadget;
use classes\LaptopProduct;
use classes\interfaces\I3D;

error_reporting(-1);

function autoloader1($class) {

	$class = str_replace("\\", '/', $class);

	$file = __DIR__ . "/{$class}.php"; //теперь здесь пишем только имя класса, весь остальной путь берется из namespace.
    if ( file_exists($file) ) {
        require_once $file;
    }
}

spl_autoload_register('autoloader1');

function offerCase(IGadget $product) {
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new \classes\BookProduct('Brave new world', 170, '200 страниц');
$laptop = new LaptopProduct('Macbook', '100000', 'core i7');

//var_dump($laptop instanceof IGadget);

offerCase($laptop);
//offerCase($book);

echo '<pre>';
print_r($book);
echo '</pre>';

echo $book->getProduct();