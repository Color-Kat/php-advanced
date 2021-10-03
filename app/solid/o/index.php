<?php

require('autoload.php');

echo '<br><br> ====== solid/o/index.php ====== <br><br>';
echo '- SOLID - open/closed principle - <br>';

// ПРИНЦИП ОТКРЫТОСТИ\ЗАКРЫТОСТИ КЛАССА
// Есть класс Product, в котором нужно осуществлять логирование, например.
// Потом нам потребовалось поменять логику логирования - наприсер, логировать вместо файла в БД
// если добавить эту логику прямо в этот класс, то это может сломать приложение,
// поэтому сделаем общий для всех интерфейс логгирования, унаследуемся от него
// и сделаем 2 класса - FileLogger и DBLogger

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
