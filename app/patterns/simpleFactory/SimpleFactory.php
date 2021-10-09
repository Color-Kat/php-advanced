<?php

require_once __DIR__ . '/messenger/MessengerInterface.php';
require_once __DIR__ . '/messenger/AbstractMessenger.php';
require_once __DIR__ . '/messenger/EmailMessenger.php';
require_once __DIR__ . '/messenger/SmsMessenger.php';
require_once __DIR__ . '/messenger/AppMessenger.php';

class SimpleFactory
{
    public function build($type)
    {
        switch ($type) {
            case 'sms':
                $messenger = new SmsMessenger();
                $messenger->setMessage('default SMS for phone');
                $sender = '99204152621';
                break;

            case 'email':
                $messenger = new EmailMessenger();
                $messenger->setMessage('default message by EMAIL');
                $sender = 'unitTest@cmail.com';
                break;

            default:
                throw new \InvalidArgumentException('Wrong messenger type!');
                break;
        }

        $messenger
            ->setRecipient('admin@cmail.com')
            ->setSender($sender)
            

        return $messenger;
    }
}
