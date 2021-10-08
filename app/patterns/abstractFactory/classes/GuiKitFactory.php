<?php

require_once(__DIR__ . '/../interfaces/GuiFactoryInterface.php');
require_once(__DIR__ . '/../classes/BootstrapFactory.php');
require_once(__DIR__ . '/../classes/TailwindCssFactory.php');

class GuiKitFactory
{
    public function getFactory($type): GuiFactoryInterface
    {
        switch ($type) {
            case 'bootstrap':
                $factory = new BootstrapFactory();
                break;

            case 'tailwindCss':
                $factory = new TailwindCssFactory();
                break;

            default:
                throw new \InvalidArgumentException("Unkown type [{$type}]");
                break;
        }

        return $factory;
    }
}
