<?php

require_once __DIR__ . '/Vehicle.php';

class Truck extends Vehicle 
{
    public function send(): string {
        if(empty($this->destination)) new \Exception('no destination!');

        return "package send to {$this->destination} by TRUCK";
    }
}
