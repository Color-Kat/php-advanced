<?php

require('PropertyContainerInterface.php');
require('PropertyContainer.php');
require('BlogPost.php');

echo '<br><br>= patterns/propertyContainer/index.php =<br><br>';
echo '----- patterns/propertyContainer ----- <br>';

/**
 * КОНТЕЙНЕР СВОЙСТВ
 * фундументальный паттерн - класс, который позволяет
 * добавлять, удалять, обновлять и получать дополнительные свойства
 * 
 * Это класс, у которого есть свойства для этих операций,
 * в нем есть массив, в котором хранятся эти дополнительные свойства
 */

$post = new BlogPost();
$post->setTitel('Design patterns');
$post->setText('LEARN DESIGN PATTERNS!');

echo '<pre>';
var_dump($post);
echo '</pre>';

$post->addProperty('createDate', '06-12-2005');
$post->addProperty('likes', 0);
$post->updateProperty('likes', 42);

echo '<pre>';
var_dump($post);
echo '</pre>';

echo '<br> ==========================';
