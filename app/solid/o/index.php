<?php

require('autoload.php');

echo '<br><br> ====== solid/o/index.php ====== <br><br>';
echo '- SOLID - open/closed principle - <br>';

// ПРИНЦИ ЕДИНСТВЕННОЙ ОТВЕТСТВЕННОСТИ
// выносим логгирование из класса product в отдельный класс CLoger
// в данном случае он еще соответствует стандарту psr-3, который я писал ранее
$echoLogger = new \ColorKat\Logger\EchoLogger();
$product = new \ColorKat\Product($echoLogger);
$product->addProduct('Iphone 13', 'Very expencive, but very expensive but cheaper Iphone 12');
$product->addProduct('Iphone 13', 'Iphone 12 is worse;)');

// объект logger - общий для все классов 
$echoLogger->notice('Everythings works perfectly!!');

echo '<br>Logging to file by another logger<br>';

$fileLogger = new \ColorKat\Logger\FileLogger();
$product = new \ColorKat\Product($fileLogger);
$product->addProduct('Iphone 13', 'Very expencive, but very expensive but cheaper Iphone 12');
$product->addProduct('Iphone 13', 'Iphone 12 is worse;)');

$fileLogger->notice('EVERYTHINGS WORKS VERY NICE!');

echo '<br> ==========================';
