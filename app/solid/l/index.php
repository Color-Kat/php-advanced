<?php

echo '<br><br> ====== solid/l/index.php ====== <br><br>';
echo '- SOLID - Liskov substitution principle - <br>';

// ПРИНЦИП ПОДСТАНОВКИ БАРБАРЫ ЛИСКОВ (LSP)
// Поведение класа, который наследуется от другого класса
// не должно протеворечить поведению базового класса
// базовый класс возвращает число - и ты возвращай число

require('Person.php');
require('Man.php');
require('Woman.php');
require('Disabled.php');
require('Butcher.php');

$man = new Man();
$woman = new Woman();
$disabled = new Disabled();

// мясник считает мясо в ногах
echo '<br> MAN -' . (new Butcher($man))->checkAmountOfMeat() . '<br>';
echo '<br> WOMAN -' . (new Butcher($woman))->checkAmountOfMeat() . '<br>';
// не соответствует приципу lsp - ошибка
echo '<br> DISABLED MAN -' . (new Butcher($disabled))->checkAmountOfMeat() . '<br>';

echo '<br> ==========================';
