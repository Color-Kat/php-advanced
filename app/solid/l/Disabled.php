<?php

// Не соответствует принципу LSP - walk должен возвращать число!
class DISABLED extends Person
{
    private string $name = 'Disabled man';
    private $legsCount = 0;

    public function legs()
    {
        echo  $this->name . ' has no legs, he is disabled';
        return "i don't have legs!";
    }
}
