<?php

require_once 'FileUploadInterface.php';
require_once 'FileUpload.php';
require_once 'ColorFiler.php';
require_once 'FileUploadAdapter.php';

echo '<br><br>= patterns/adapter/index.php =<br><br>';
echo '------- patterns/adpter ------- <br>';

/**
 * АДАПТЕР (ADAPTER)
 * 
 * Это структурный паттерн проектирования,
 * который позволяет работать с разными классами, 
 * которые имеют разные методы и свойства, но выполняют одну и ту же логику,
 * через определенный интерфейс.
 * 
 * Это посзволяет не переписывать логику при смене какого-то класса,
 * нужно всего лишь поменять в даптере класс и его методы.
 */

$fileUpload = new FileUploadAdapter();

$fileUpload->upload('kitty.png');
echo '<br>';
$fileUpload->uploadAndMinimize('kitty.jpg');

echo '<br> ==========================';
