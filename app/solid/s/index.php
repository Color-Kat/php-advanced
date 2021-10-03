<?php

require('autoload.php');

echo '<br><br> ====== solid/s/index.php ====== <br><br>';
echo '- SOLID - single responsibility principle - <br>';

// ПРИНЦИG ЕДИНСТВЕННОЙ ОТВЕТСТВЕННОСТИ
// выносим логгирование из класса product в отдельный класс CLoger
// в данном случае он еще соответствует стандарту psr-3, который я писал ранее
// То есть в классе product не должно быть ничего постороннего, в данном случае - логгирования
$logger = new \ColorKat\Logger\CLogger();
$product = new \ColorKat\Product($logger);
$product->addProduct('Iphone 13', 'Very expencive, but very expensive but cheaper Iphone 12');
$product->addProduct('Iphone 13', 'Iphone 12 is worse;)');

// объект logger - общий для все классов 
$logger->notice('Everythings works perfectly!!');

echo '<br> ==========================';
