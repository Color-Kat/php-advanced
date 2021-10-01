<?php

class BlogPost extends PropertyContainer
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $text;

    /**
     * @param string $title
     */
    public function setTitel($title)
    {
        $this->title = $title;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return "\"$this->title\"";
    }

    /**
     * @return string
     */
    public function getText()
    {
        return "\"$this->text\"";
    }
}
