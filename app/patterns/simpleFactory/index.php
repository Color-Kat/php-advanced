<?php

require_once 'SimpleFactory.php';

echo '<br><br>= patterns/simpleFactory/index.php =<br><br>';
echo '------- patterns/simple factory ------- <br>';

/**
 * ПРОСТАЯ ФАБРИКА
 * 
 * Порождающий шаблон проектирования, представляющий собой класс,
 * в котором есть метод (обычно build или factory),
 * в методе есть условие, которое выбирает возвращаемый объект.
 * 
 * Основное отличие от статической фабрики в том, что фабрика не является статической
 */

$emailMessenger = (new SimpleFactory())->build('email');
$phoneMessenger = (new SimpleFactory())->build('sms');


echo '<br> ==========================';
