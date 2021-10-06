<?php

class Publisher implements PublisherInterface
{
    /**
     * @var string
     */
    private $topic;

    /**
     * @var EventChannelInterface
     */
    private $eventChannel;

    public function __construct($topic, EventChannelInterface $eventChannel)
    {
        $this->topic = $topic;

        $this->eventChannel = $eventChannel;
    }

    public function publish($data) {
        $this->eventChannel->publish($this->topic, $data);
    }
}
