<?php

require_once(__DIR__ . '/ButtonInterface.php');
require_once(__DIR__ . '/InputInterface.php');
require_once(__DIR__ . '/GuiItemInterface.php');

interface GuiFactoryInterface
{
    public function buildButton(): ButtonInterface;
    public function buildInput(): InputInterface;
    public function buildCheckbox(): GuiItemInterface;
}
