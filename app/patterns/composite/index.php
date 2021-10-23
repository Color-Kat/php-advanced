<?php

require('CompositeItemInterface.php');
require('CompositeInterface.php');
require('CompositeTrait.php');
require('order/Ingredient.php');
require('order/Product.php');
require('order/Order.php');

echo '<br><br>= patterns/composite/index.php =<br><br>';
echo '---------- patterns/composite ---------- <br>';

/**
 * КОМПОНОВЩИК
 * 
 * Структурный паттерн, который объединяет объекты в древовидную структуру в виде класса.
 * Есть классы, которые реализуют интерфейс Item и интерфейс Composite - т.е листок и ветка.
 * Все эти классы реализуют метод, который будет возвращать либо данные (если это листок) 
 * или вызывать этот же метод (если это ветка) - то есть такая рекурсия.
 * 
 */

// Самая верхняя ветка
$order = new Order('Заказ #5284023');

// Создаем продукт и добавляем ему дочерний компонент (листок)
$rolton = new Product('Лапша быстрого приготовления RolTon');
$rolton->addChild(new Ingredient('макарошки'));

// Создаем продукт и добавляем ему 2 дочерниъ компонента
$frenchFries = new Product('Картошка фри из макдональдса');
$frenchFries->addChild(new Ingredient('картошечка'));
$frenchFries->addChild(new Ingredient('соусик'));

// Добавляем в заказ эти 2 продукта с их иерархией
$order->addChild($frenchFries);
$order->addChild($rolton);

// метод calcPrice рекурсивно проходится по всем веткам и считает цену их ингредиентов
echo $order->calcPrice();
echo $order->getOrderList();

echo '<br> ==========================';
