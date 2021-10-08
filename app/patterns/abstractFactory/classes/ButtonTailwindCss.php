<?php

class ButtonTailwindCss implements ButtonInterface
{
    private $text = '';
    private $size = '';

    public function setText(string $text): ButtonTailwindCss
    {
        $this->text = $text;

        return $this;
    }

    public function changeSize(string $size): ButtonTailwindCss
    {
        if ($size === 'sm') $this->size = 'text-sm';
        if ($size === 'lg') $this->size = 'text-xs';
        if ($size === 'xs') $this->size = 'text-5xs';

        return $this;
    }

    public function draw()
    {
        echo "<button class='rounded-lg px-8 py-2 bg-blue-500 text-blue-100 hover:bg-blue-600 duration-300 {$this->size}'>{$this->text}</button>";
    }
}
