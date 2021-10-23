<?php

class Ingredient implements CompositeItemInterface
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function calcPrice(): float
    {
        if (isset($this->price)) return $this->price;

        $prices = [10, 20, 30, 40, 50, 100];

        $this->price = $prices[array_rand($prices)];

        return $this->price;
    }
}
