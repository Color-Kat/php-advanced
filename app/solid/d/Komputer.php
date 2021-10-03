<?php

class Komputer
{
    public function __construct(private IInternetProvider $internetProvider)
    {
    }

    public function goOnline()
    {
        return $this->internetProvider->getKitties();
    }
}
