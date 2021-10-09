<?php

require_once 'StaticFactory.php';

echo '<br><br>= patterns/staticFactory/index.php =<br><br>';
echo '------- patterns/static factory ------- <br>';

/**
 * СТАТИЧЕСКАЯ ФАРИКА
 * 
 * Порождающий шаблон проектирования, представляющий собой класс,
 * у которого есть статический метод, 
 * который, исходя из параметра, в котором указано, что создавать,
 * создаёт экземпляр класса + инкапсулирует (скрывает) в себе
 * логику создания, настройки и тп этого класса.
 * 
 * При этом обязательным условием НЕ является наличие ОБЩЕГО интерфейса у создаваемых объектов
 * 
 * Это похоже на паттерн ИНТЕРФЕЙС, но в отличии от ничего
 * статическая фарбрика обычно ограничивается работой с одним экземпляром класса
 */

$messenger = StaticFactory::build('email');
$messenger->send();
$messenger->setSender('ich');
$messenger->setMessage('ich schreibe dich, admin');

$messenger = StaticFactory::build('sms');
$messenger->send();

echo '<br> ==========================';
