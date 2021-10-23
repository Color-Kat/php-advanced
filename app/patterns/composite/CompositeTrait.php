<?php

trait CompositeTrait
{
    private $compositeItems = array();

    public function addChild(CompositeItemInterface $item)
    {
        $this->compositeItems[] = $item;
    }

    public function calcPrice(): float
    {
        if (isset($this->price)) return $this->price;
        $this->price = 0;

        foreach ($this->compositeItems as $item) {
            $this->price += $item->calcPrice();
        }

        return $this->price;
    }

    public function getOrderList()
    {
        $orderList = '';

        foreach ($this->compositeItems as $item) {
            $orderList .= ', ' . $item->name;
        }

        return $orderList;
    }
}
