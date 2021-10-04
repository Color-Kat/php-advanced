<?php

/** 
 * Interface EventChannelInterface
 * 
 * Links Publishers and Subscribers
 */
interface EventChannelInterface
{
    /**
     * Publicher notifies the channel, that all who are subscribed to $topic
     * must be notified by $data
     * 
     * @param string $topic
     * @param mixed $data
     */
    public function publish($topic, $data);

    /**
     * $subscriper subscribe to the event by $topic
     * 
     * @param       string        $topic
     * @param SubscriberInterface $subscriber
     */
    public function subscribe($topic, SubscriberInterface $subscriber);
}
