<?php

namespace ColorKat\Logger;

class FileLogger extends \ColorKat\Logger\AbstractLogger
{
    private function logToFile($level, string $message, array $context = [])
    {
        $pathToLogs = __DIR__ . DIRECTORY_SEPARATOR . 'logs/';

        if (!is_dir($pathToLogs)) mkdir($pathToLogs);

        $log = "[" . strtoupper($level) . "] - $message \n";

        file_put_contents($pathToLogs . 'log.txt',  $log, FILE_APPEND);
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
        $this->logToFile($level, $message, $context);
    }
}
