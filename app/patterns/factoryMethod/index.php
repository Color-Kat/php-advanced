<?php

require_once 'classes/AirLogistics.php';
require_once 'classes/SeaLogistics.php';
require_once 'classes/RoadLogistics.php';

echo '<br><br>= patterns/factoryMethod/index.php =<br><br>';
echo '------- patterns/factory method ------- <br>';

/**
 * ФАББРИЧНЫЙ МЕТОД
 * 
 * Пораждающий паттерн проектирования, который определяет
 * общий интерфейс для создания объектов в абстрактном классе,
 * при этом заставляя дочерние классы реализовывать метод, 
 * через который будет определяться тип создаваемых объектов
 */

// мы можем выбрать любого перевозчика - у всех одинаковые методы, но свояреализация
$carrier = new SeaLogistics();
// $carrier = new AirLogistics();
// $carrier = new RoadLogistics();


echo $carrier->delevery('Österreich, Puschkin strasse, 2');


echo '<br> ==========================';
