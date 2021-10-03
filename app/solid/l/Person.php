<?php

// BASIC CLASS
class Person
{
    private string $name = 'nobody';
    private $legsCount = 2;

    public function legs()
    {
        return $this->name . ' have ' . $this->legsCount . 'legs';
    }
}
