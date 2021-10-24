<?php

class UnitedRussia extends PartyDecoratorAbstract
{
    public function before(){
        return 'Снова будет править Путин!!! ';
    }

    public function after(){
        return '';
    }
}
