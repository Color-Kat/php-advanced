<?php

// Соответствует принципу lsp
class Man extends Person
{
    private string $name = 'Man';
    private $legsCount = 2;

    public function legs()
    {
        echo $this->name . ' has ' . $this->legsCount . ' legs';
        return $this->legsCount;
    }
}
