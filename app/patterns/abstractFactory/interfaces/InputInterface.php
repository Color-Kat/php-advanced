<?php

require_once __DIR__ . '/GuiItemInterface.php';


interface InputInterface extends GuiItemInterface
{
    public function setPlaceholder(string $text): GuiItemInterface;
    public function changeSize(string $size): GuiItemInterface;
}
