<?php

require_once __DIR__ . '/messenger/MessengerInterface.php';
require_once __DIR__ . '/messenger/AbstractMessenger.php';
require_once __DIR__ . '/messenger/EmailMessenger.php';
require_once __DIR__ . '/messenger/SmsMessenger.php';
require_once __DIR__ . '/messenger/AppMessenger.php';

class StaticFactory
{
    static function build($type)
    {
        $messenger = new AppMessenger();

        switch ($type) {
            case 'sms':
                $messenger->toSms();
                $sender = '99204152621';
                break;

            case 'email':
                $messenger->toEmail();
                $sender = 'unitTest@cmail.com';
                break;

            default:
                throw new \InvalidArgumentException('Wrong messenger type!');
                break;
        }

        $messenger
            ->setRecipient('admin@cmail.com')
            ->setSender($sender)
            ->setMessage('default test message. You can change it');

        return $messenger;
    }
}
