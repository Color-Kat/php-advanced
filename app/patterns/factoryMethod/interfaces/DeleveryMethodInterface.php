<?php

interface DeleveryMethodInterface
{
    public function setDestination(string $destination);
    public function send(): string;
}
