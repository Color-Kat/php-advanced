<?php

// Соответствует принципу lsp
class Woman extends Person
{
    private string $name = 'Woman';
    private $legsCount = 2;

    public function legs()
    {
        echo $this->name . ' has ' . $this->legsCount . ' legs';
        return $this->legsCount;
    }

    public function cooking() {
        echo $this->name . ' cookings';
    }
}
