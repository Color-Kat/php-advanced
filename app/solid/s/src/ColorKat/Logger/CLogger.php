<?php

namespace ColorKat\Logger;

class CLogger extends \ColorKat\Logger\AbstractLogger
{
    /**
     * Logs with an arbitrary level.
     *
     * @param mixed  $level
     * @param string $message
     * @param array $context
     *
     * @return void
     */
    public function log($level, string $message, array $context = []): void
    {
        echo "[" . strtoupper($level) . "] - $message <br>";
    }
}
