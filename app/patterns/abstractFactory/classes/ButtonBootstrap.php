<?php

class ButtonBootstrap implements ButtonInterface
{
    private $text = '';
    private $size = '';

    public function setText(string $text): ButtonBootstrap {
        $this->text = $text;

        return $this;
    }

    public function changeSize(string $size): ButtonBootstrap {
        if ($size === 'sm') $this->size = 'btn-sm';
        if ($size === 'lg') $this->size = 'btn-lg';
        if ($size === 'xs') $this->size = 'btn-lg';

        return $this;
    }

    public function draw() {
        echo "<button class='btn-primary {$this->size}'>{$this->text}</button>";
    }
}