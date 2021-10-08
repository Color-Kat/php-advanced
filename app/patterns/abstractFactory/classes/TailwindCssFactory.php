<?php

require_once(__DIR__ . '/../interfaces/GuiFactoryInterface.php');
require_once(__DIR__ . '/../interfaces/ButtonInterface.php');
require_once(__DIR__ . '/../interfaces/InputInterface.php');

require_once(__DIR__ . '/ButtonTailwindCss.php');
require_once(__DIR__ . '/InputTailwindCss.php');
require_once(__DIR__ . '/CheckboxTailwindCss.php');


class TailwindCssFactory implements GuiFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        return new ButtonTailwindCss();
    }
    public function buildInput(): InputInterface
    {
        return new InputTailwindCss();
    }
    public function buildCheckbox(): GuiItemInterface
    {
        return new CheckboxTailwindCss();
    }
}
