<?php

require('MessengerInterface.php');
require('AbstractMessenger.php');
require('EmailMessenger.php');
require('SmsMessenger.php');
require('AppMessenger.php');
// require('PushMessenger.php');

echo '<br><br>=== patterns/delegetion/index.php ===<br><br>';
echo '---------- patterns/delegation ---------- <br>';

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