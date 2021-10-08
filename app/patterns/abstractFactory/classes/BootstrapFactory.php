<?php

require_once(__DIR__ . '/../interfaces/GuiFactoryInterface.php');
require_once(__DIR__ . '/../interfaces/ButtonInterface.php');
require_once(__DIR__ . '/../interfaces/InputInterface.php');

require_once(__DIR__ . '/ButtonBootstrap.php');
require_once(__DIR__ . '/InputBootstrap.php');
require_once(__DIR__ . '/CheckboxBootstrap.php');


class BootstrapFactory implements GuiFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        return new ButtonBootstrap();
    }
    public function buildInput(): InputInterface
    {
        return new InputBootstrap();
    }
    public function buildCheckbox(): GuiItemInterface
    {
        return new CheckboxBootstrap();
    }
}
