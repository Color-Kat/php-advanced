<?php

class LDPR extends PartyDecoratorAbstract
{
    public function before(){
        return '';
    }

    public function after(){
        return ' Отменим ЕГЭ!';
    }
}
