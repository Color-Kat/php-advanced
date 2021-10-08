<?php

class CheckboxBootstrap implements GuiItemInterface
{
    public function draw() {
        echo "<input type='checkbox'/>";
    }
}