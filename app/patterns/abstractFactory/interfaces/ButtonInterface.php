<?php

require(__DIR__ . '/GuiItemInterface.php');

interface ButtonInterface extends GuiItemInterface
{
    public function setText(string $text): ButtonInterface;
    public function changeSize(string $size): ButtonInterface;
}
