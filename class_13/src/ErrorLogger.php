<?php
namespace Pondit;

use Exception;

class ErrorLogger {

    public function __construct(protected Logger $logger)
    {
    }

    // public function setLogger(Logger $logger)
    // {
    //     $this->logger = $logger;
    // }

    public function error(Exception $exception): void
    {
        $this->logger->setLog($exception->getMessage());
    }

    public function report(): string
    {
        return $this->logger->getLog();
    }
}