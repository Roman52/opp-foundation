<?php 
/*
Урок № 14. Трейты
Трейты появились в php 5.4

Это довольно таки сложные и большие темы - я думаю, что я особо юзать их не буду, поэтому просто пробегаюсь для общего знания. Чтобы это все запомнить нужно в этом работать постоянно, а я работаю только с вп по сути - счас посмотрю - завтра забуду, поэтому просто пробегаюсь для общих знаний.

 Трейт - это по сути дела тот же самый класс, но только класс от которого нельзя создать объект. Он напоминает интерфейс, но в отличии от интерфейса трейты могут иметь реализацию, и это очень удобно. Трейт мы можем подключать к любому классу. Это огромная тема - мы смотрим только основы. Трейт в отличии от интерфейса не меняет тип объекта, но меняет структуру класса. Наш трейт TColor.php будет работать с цветом.

 use TColor - так мы подключаем трейт в LaptopProduct.php phpstorm добавляет сам use rz_core\traits\TColor; пространство имен вверху файла.

 Фактически мы сделали include этого кода:

 private $color;

public function getColor() {
	return $this->color;
}
public function setColor( $color ) {
	$this->color = $color;
}

 в файле LaptopProduct.php, когда написали use TColor;

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

offerCase($laptop);

echo '<pre>';
print_r($book);
echo '</pre>';

echo '<pre>';
print_r($laptop);
echo '</pre>';