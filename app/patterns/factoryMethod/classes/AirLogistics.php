<?php

require_once __DIR__ . '/AbstractLogistic.php';
require_once __DIR__ . '/vehicles/Airplane.php';

class AirLogistics extends AbstractLogistic
{
    public function deliveryMethod(): DeleveryMethodInterface
    {
        return new Airplane();
    }
}
