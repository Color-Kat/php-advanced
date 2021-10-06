<?php

interface PublisherInterface
{
    /**
     * notify subscribers of $data
     */
    public function publish($data);
}
