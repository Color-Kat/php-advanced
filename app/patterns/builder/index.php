<?php

require_once 'DBInterface.php';
require_once 'DB.php';
require_once 'DBBuilder.php';

echo '<br><br>= patterns/builder/index.php =<br><br>';
echo '------- patterns/builder ------- <br>';

/**
 * СТРОИТЕЛЬ
 * 
 * Пораждающий паттерн проектирования, который
 * позволяет создавать сложные объекты пошагово 
 * с помощью различных методов.
 */

$db = new DBBuilder();
$res = $db->table('users')
    ->select('name', 'avatar')
    ->where('email', 'colorkat@gmail.com')
    ->where('id', '123')
    ->get();

echo $res;

echo '<br> ==========================';
