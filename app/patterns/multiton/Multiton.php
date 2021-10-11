<?php

class Multiton implements MultitonInterface
{
    use MultitonTrait;

    private $name = 'default advanced singleton namespace';

    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    
    public function getName(): string
    {
        return $this->name;
    }
}