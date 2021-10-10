<?php

class Singleton
{
    static private $instance;
    private $name = 'default name';

    static public function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
