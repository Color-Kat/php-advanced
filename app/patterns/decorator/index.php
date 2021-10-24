<?php

require('IElections.php');
require('Party.php');
require('PartyDecoratorAbstract.php');
require('LDPR.php');
require('UnitedRussia.php');
require('Sobchak.php');

echo '<br><br>=== patterns/decorator/index.php ===<br><br>';
echo '---------- patterns/decorator ---------- <br>';

/**
 * ДЕКОРАТОР
 * 
 * Это структурный паттерн проектирования, который позволяет
 * довбавлять объектам новую функциональность с помощью классов "обёрток"
 * 
 * Для этого начальный класс и его обертки реализуют один и тот же интерфейс.
 * В обертке в этом методе вызывается дополнительная функциональность
 * и этот метод начального класса (опционально)
 */

$party = new Party();

echo '<br>ЛДПР: <br>';
$LDPR = new LDPR($party);
echo $LDPR->promises();

echo '<br>Единая Россия: <br>';
$unitedRussia = new UnitedRussia($party);
echo $unitedRussia->promises();

echo '<br>Собчак: <br>';
$sobchak = new Sobchak($LDPR);
echo $sobchak->promises();

echo '<br> ==========================';
