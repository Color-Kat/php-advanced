<?php

abstract class AbstractMessenger implements MessengerInterface
{
    protected $sender;
    protected $recipient;
    protected $message;

    public function setSender($sender): MessengerInterface
    {
        $this->sender = $sender;

        return $this;
    }

    public function setRecipient($recipient): MessengerInterface
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function setMessage($message): MessengerInterface
    {
        $this->message = $message;

        return $this;
    }

    public function send(): bool
    {
        $isSuccess = rand(0, 1);

        if ($isSuccess) {
            echo 'Message send success <br>';
            return true;
        } else {
            throw new \Exception('some error occurred while sending your message');
            return false;
        }
    }
}
