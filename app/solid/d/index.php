<?php

echo '<br><br> ====== solid/d/index.php ====== <br><br>';
echo '- SOLID - dependency inversion principle - <br>';

// ПРИНЦИП ИНВЕРСИИ ЗАВИСИМОСТЕЙ
// все строится на абстракции -
// модули верхнего уровня не должны зависеть от модулей нижнего уровня,
// они должны зависеть от абстракции
// абстракция не зависит от деталей - детали зависят от абстракции
// здесь: деталь - класс

require('IInternetProvider.php');
require('RusTelecom.php');
require('ColorZone.php');
require('Komputer.php');

// передаём InternetProviderInterface
$computerSlowInternet = new Komputer(new RusTelecom());
$computerColorZone = new Komputer(new ColorZone());

echo 'RusTelecom - ' . $computerSlowInternet->goOnline() . '<br/>';
echo 'ColorZone internet - ' . $computerColorZone->goOnline() . '<br/>';

echo '<br> ==========================';
