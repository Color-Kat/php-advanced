<?php

class EventChannel implements EventChannelInterface
{
    private $topics = [];

    public function __construct(private LoggerInterface $logger)
    {
    }

    public function subscribe($topic, SubscriberInterface $subscriber)
    {
        $this->topics[$topic][] = $subscriber;

        $this->logger->debug("{$subscriber->getName()} subscribe to {$topic}");
    }

    public function publish($topic, $data)
    {
        if (empty($this->topics[$topic])) return;

        foreach ($this->topics[$topic] as $subscriber) {
            $subscriber->notify($data);
        }
    }
}
