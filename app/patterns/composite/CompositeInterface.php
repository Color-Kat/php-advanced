<?php

interface CompositeInterface extends CompositeItemInterface
{
    public function addChild(CompositeItemInterface $item);
}