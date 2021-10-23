<?php

class Order implements CompositeInterface
{
    use CompositeTrait;

    public function __construct($name) {
        $this->name = $name;
    }
}
