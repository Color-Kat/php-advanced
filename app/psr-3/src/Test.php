<?php

use \ColorKat\Logger\CLogger;

class Test
{
    private $logger;
    public function __construct(CLogger $logger)
    {
        $this->logger = $logger;
    }

    public function testLog($mess)
    {
        $this->logger->info($mess);
    }
}
