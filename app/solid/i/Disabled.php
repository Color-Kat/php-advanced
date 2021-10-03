<?php

class Disabled implements IRide
{
    public function ride()
    {
        echo "I can't walk, so i ride in a wheelchair";
    }
}
