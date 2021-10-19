<?php

require('HumanBirth.php');

echo '<br><br>= patterns/prototype/index.php =<br><br>';
echo '----- patterns/prototype ----- <br>';

/**
 * ПРОТОТИП (КЛОН)
 * Пораждающий паттерн, который создает объект
 * путём клонирования другого объекта (прототипа)
 * вместо создания его через конструктор
 * 
 * Позволяет копировать сложные объекты, 
 * чтобы не создавать их заново
 */

$disabled = new HumanBirth();
$disabled->sayHi();

echo '<br>';

$man = clone $disabled;
$man->addArms();
$man->addLegs();
$man->sayHi();

echo '<br> ==========================';
