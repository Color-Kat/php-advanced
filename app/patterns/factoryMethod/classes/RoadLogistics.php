<?php

require_once __DIR__ . '/AbstractLogistic.php';
require_once __DIR__ . '/vehicles/Truck.php';

class RoadLogistics extends AbstractLogistic
{
    public function deliveryMethod(): DeleveryMethodInterface
    {
        return new Truck();
    }
}
