<?php

interface SubscriberInterface
{
    /**
     * notify subscriber
     * 
     * @param $data
     */
    public function notify($data);

    public function getName(): string;
}
