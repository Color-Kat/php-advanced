<?php

class Product implements CompositeInterface
{
    use CompositeTrait;

    public function __construct($name) {
        $this->name = $name;
    }
}
