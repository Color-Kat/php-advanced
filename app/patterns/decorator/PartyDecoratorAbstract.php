<?php

abstract class PartyDecoratorAbstract implements IElections
{
    protected $decoratedObj;

    public function __construct(IElections $decoratedObj)
    {
        $this->decoratedObj = $decoratedObj;
    }

    public function promises(): string
    {
        $str = $this->before() . $this->decoratedObj->promises() . $this->after();
        return $str;
    }

    public function before()
    {
        return 'Почими дороги! ';
    }

    public function after()
    {
        return '';
    }
}
