<?php

require_once __DIR__ . '/../../interfaces/DeleveryMethodInterface.php';

abstract class Vehicle implements DeleveryMethodInterface
{
    protected $destination;

    public function setDestination(string $destination)
    {
        $this->destination = $destination;
    }
}
