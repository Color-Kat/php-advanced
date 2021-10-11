<?php

require_once 'MultitonInterface.php';
require_once 'MultitonTrait.php';
require_once 'Multiton.php';

echo '<br><br>= patterns/multiton/index.php =<br><br>';
echo '------- patterns/multiton ------- <br>';

/**
 * ПУЛ ОДИНОЧЕК (MULTITON)
 * 
 * Порождающий шаблон проектирования, который представляет собой
 * класс, который управляет ОДИНОЧКАМИ с помощью ассоциативного массива
 */

$humans['bob'] = Multiton::getInstance('bob')->setName('bob');
$humans['jack'] = Multiton::getInstance('jack')->setName('jack');

$humans['bob2'] =  Multiton::getInstance('bob')->setName('bobby');

echo "humans['bob'] - {$humans['bob']->getName()} <br>";
echo "humans['bob2'] - {$humans['bob2']->getName()} <br>";
echo "humans['jack'] - {$humans['jack']->getName()} <br>";

echo '<br> ==========================';
