<?php

class CheckboxTailwindCss implements GuiItemInterface
{
    public function draw() {
        echo "<input type='checkbox form-checkbox text-indigo-600' class='btn-primary />";
    }
}