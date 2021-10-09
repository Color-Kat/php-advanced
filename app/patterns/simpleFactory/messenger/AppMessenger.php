<?php

class AppMessenger implements MessengerInterface
{
    private $messenger;

    public function __construct()
    {
        $this->toEmail();
    }

    public function toEmail()
    {
        $this->messenger = new EmailMessenger();
    }

    public function toSms()
    {
        $this->messenger = new SmsMessenger();
    }

    public function setSender($sender): MessengerInterface
    {
        $this->messenger->setSender($sender);

        return $this->messenger;
    }

    public function setRecipient($recipient): MessengerInterface
    {
        $this->messenger->setRecipient($recipient);

        return $this->messenger;
    }

    public function setMessage($message): MessengerInterface
    {
        $this->messenger->setMessage($message);

        return $this->messenger;
    }

    public function send(): bool {
        return $this->messenger->send();
    }
}
