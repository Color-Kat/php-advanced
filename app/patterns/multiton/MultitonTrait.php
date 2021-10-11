<?php

trait MultitonTrait
{
    static protected $instances = [];

    static public function getInstance(string $instanceName): MultitonInterface
    {
        if (isset(static::$instances[$instanceName])) return static::$instances[$instanceName];

        static::$instances[$instanceName] = new static();

        return static::$instances[$instanceName];
    }

    /**
     * prohibit direct creation
     */
    public function __construct()
    {
    }

    /**
     * disable clining
     */
    public function __clone()
    {
    }

    /**
     * disable deserilization
     */
    public function __wakeup()
    {
    }
}
