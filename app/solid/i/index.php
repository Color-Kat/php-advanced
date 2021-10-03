<?php

echo '<br><br> ====== solid/i/index.php ====== <br><br>';
echo '- SOLID - interface segregation principle - <br>';

// ПРИНЦИП РАЗДЕЛЕНИЯ ИНТЕРФЕЙСА
// Много маленькийх интерфейсов лучше, чем один супер интерфейс (универсальный)
// Одному классу, возможно нужны все свойства и методы из интерфейса,
// а другом - нет. В данном случае классу придется делать заглушки для этих методов\свойств

require('IWalk.php');
require('IRide.php');
require('Man.php');
require('Disabled.php');

$man = new Man();
$disabled = new Disabled();

// простой человек ходит - Man имплементирует от IWalk
$man->walk();
echo '<br>';

// инвалид ездит на коляске, поэтому метод walk ему не нужен (хотя он от него не отказался бы;)
// Disabled имплементирует IRide
$disabled->ride();

echo '<br> ==========================';
