<?php

require_once 'Calculator.php';

echo '<br><br>= patterns/strategy/index.php =<br><br>';
echo '------- patterns/strategy ------- <br>';

/**
 * СТРАТЕГИЯ
 * 
 * Поведенческий паттерн, который определяет семейство алгоритмов
 * и помещает их в отдельные классы. 
 * Эти алгоритмы имеют общий интерфейс
 * и класс, который их использует может их взаимозаменять
 * прямо во время исполнения программы
 * 
 * Это упрощает расширение и добавление новых алгоритмов -
 * при добавлении алгоритма, нужно просто создать новый класс с его логикой, 
 * а основной класс трогать не нужно
 */

$calculator = new Calculator();
$calculator->setStrategy(new StrategyAdd());
echo 'StrategyAdd - 15, 42: ' .  $calculator->calculate(15, 42) . '<br>';

$calculator->setStrategy(new StrategyMultiply());
echo 'StrategyMultiply - 15, 42: ' . $calculator->calculate(15, 42) . '<br>';

echo '<br> ==========================';
