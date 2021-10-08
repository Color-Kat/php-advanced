<?php

class InputBootstrap implements InputInterface
{
    private $placeholder = '';
    private $size = '';

    public function setPlaceholder(string $placeholder): InputBootstrap
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function changeSize(string $size): InputBootstrap
    {
        if ($size === 'sm') $this->size = 'form-control-sm';
        if ($size === 'lg') $this->size = 'form-control-lg';
        if ($size === 'xs') $this->size = 'form-control-lg';

        return $this;
    }

    public function draw()
    {
        echo "<input type='text' class='form-control {$this->size}' placeholder='{$this->placeholder}'/>";
    }
}
