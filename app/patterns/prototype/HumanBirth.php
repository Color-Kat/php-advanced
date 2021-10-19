<?php

class HumanBirth
{
    private bool $arms = false;
    private bool $legs = false;

    public function addArms()
    {
        $this->arms = true;
    }

    public function addLegs()
    {
        $this->legs = true;
    }

    public function sayHi()
    {
        echo 'hi! ' . ($this->arms ? 'I have arms! ' : '') . ($this->legs ? 'I have legs! ' : '');
    }
}
