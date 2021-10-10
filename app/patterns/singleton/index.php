<?php

require_once 'Singleton.php';
require_once 'SingletonTrait.php';
require_once 'AdvancedSingleton.php';

echo '<br><br>= patterns/singleton/index.php =<br><br>';
echo '------- patterns/singleton ------- <br>';

/**
 * ОДИНОЧКА (SINGLETON)
 * 
 * Паттерн, который гарантирует наличие 
 * ТОЛЬКО одного инстанса класса в коде.
 * 
 * Следует очень осторожно применять данный паттерн, 
 * т.к. при изменении состояния в одном месте,
 * это состояние сохранится при создании "другого" инстанса
 * в другом месте (ведь вернется тот же инстанс) -
 * непонятнО, откуда появилось это состояние.
 */

// Самая простая реализация, но есть лазейки, которые посзволяют создать второй экземпляр класса
$singleton1 = Singleton::getInstance();
$singleton1->setName('I am Singleton-1');
$singleton2 = Singleton::getInstance();

echo 'singleton-1: ' . $singleton1->getName() . '<br>';
echo 'singleton-2: ' . $singleton2->getName();

echo '<br>-------------------<br>';


// Более сложная реализация с трейтом, но которая гарантирует, 
// что будет 100% только один экземпляр класса

$a_singleton1 = AdvancedSingleton::getInstance();
$a_singleton1->setName('I am AdvancedSingleton-1');
$a_singleton2 = AdvancedSingleton::getInstance();
$a_singleton2->setName('I am AdvancedSingleton-2');

echo 'advanced singleton-1: ' . $a_singleton1->getName() . '<br>';
echo 'advanced singleton-2: ' . $a_singleton2->getName();

echo '<br> ==========================';
