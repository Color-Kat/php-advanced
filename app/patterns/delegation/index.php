<?php

require('MessengerInterface.php');
require('AbstractMessenger.php');
require('EmailMessenger.php');
require('SmsMessenger.php');
require('AppMessenger.php');

echo '<br><br>=== patterns/delegetion/index.php ===<br><br>';
echo '---------- patterns/delegation ---------- <br>';

/**
 * ДЕЛЕГАЦИЯ - фундументальный шаблон проектирования,
 * это класс, у который, вместо выполнения логики в себе,
 * переносит её в классы, которые потом использует
 */

$messenger = new AppMessenger();
$messenger->setSender('Ich');
$messenger->setRecipient('Du');
$messenger->setMessage('Ich liebe dich meine freund');
$messenger->send();

echo '<br><br>';

var_dump($messenger);

echo '<br><br>';

$messenger->toSms();
$messenger->setSender('Du');
$messenger->setRecipient('Ich');
$messenger->setMessage('Du liebst mich auch');
$messenger->send();

echo '<br><br>';

var_dump($messenger);



echo '<br> ==========================';
