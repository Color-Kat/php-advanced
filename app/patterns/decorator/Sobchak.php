<?php

class Sobchak extends PartyDecoratorAbstract
{
    public function before()
    {
        return 'Я молода! Я буду править страной лучше, чем эти старики! ';
    }

    public function after()
    {
        return ' Страна станет процветать!';
    }
}
