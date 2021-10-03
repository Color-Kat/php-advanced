<?php

class Butcher {
    private $creature;

    public function __construct($creature) {
        $this->creature = $creature;
    }

    public function checkAmountOfMeat(){
        return $this->creature->legs() * 10*10*100;
    }
}