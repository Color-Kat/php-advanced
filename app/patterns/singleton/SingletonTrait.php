<?php

trait SingletonTrait
{
    static private $instance = null;

    static public function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }

    /**
     * prohibit direct creation
     */
    public function __construct() {}

    /**
     * disable clining
     */
    public function __clone() {}

    /**
     * disable deserilization
     */
    public function __wakeup() {}
}