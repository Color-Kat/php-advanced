<?php

class AdvancedSingleton
{
    use SingletonTrait;

    private $name = 'default advanced singleton namespace';

    public function setName($name)
    {
        $this->name = $name;
    }

    
    public function getName()
    {
        return $this->name;
    }
}