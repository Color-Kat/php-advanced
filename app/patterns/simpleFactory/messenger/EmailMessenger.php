<?php

class EmailMessenger extends AbstractMessenger
{
    public function send(): bool
    {
        echo "<br>Sending message from <i>$this->sender</i> to <i>$this->recipient</i> by " . __METHOD__ . '<br>';

        // return true;
        return parent::send();
    }
}
