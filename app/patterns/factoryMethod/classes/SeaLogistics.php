<?php

require_once __DIR__ . '/AbstractLogistic.php';
require_once __DIR__ . '/vehicles/Ship.php';

class SeaLogistics extends AbstractLogistic
{
    public function deliveryMethod(): DeleveryMethodInterface
    {
        return new Ship();
    }
}
