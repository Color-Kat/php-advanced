<?php

class Subscriber implements SubscriberInterface
{
    public function __construct(
        private LoggerInterface $logger,
        private string $name,
        private string $lastname = ''
    ) {
    }

    public function getName(): string
    {
        return ucfirst($this->name);
    }

    public function notify($data)
    {
        $this->logger->debug("{$this->getName()} get " . implode(' - ', $data));
    }
}
