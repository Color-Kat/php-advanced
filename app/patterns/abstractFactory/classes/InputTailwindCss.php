<?php

class InputTailwindCss implements InputInterface
{
    private $placeholder = '';
    private $size = '';

    public function setPlaceholder(string $placeholder): InputTailwindCss {
        $this->placeholder = $placeholder;
        return $this;
    }

    public function changeSize(string $size): InputTailwindCss {
        if ($size === 'sm') $this->size = 'text-sm';
        if ($size === 'lg') $this->size = 'text-xs';
        if ($size === 'xs') $this->size = 'text-4xs';

        return $this;
    }

    public function draw() {
        echo "<input type='text' class='border py-2 px-3 text-grey-darkest {$this->size}' placeholder='{$this->placeholder}'/>";
    }
}