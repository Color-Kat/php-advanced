<?php

class Logger extends AbstractLogger
{
    private function echoLog($level, string $message, array $context = [])
    {
        echo "[" . strtoupper($level) . "] - $message <br>";
    }

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
        $this->echoLog($level, $message, $context);
    }
}
