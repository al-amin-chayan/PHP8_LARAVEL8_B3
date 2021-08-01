<?php
namespace Pondit;

class FileLogger implements Logger {

    private string $file;

    public function __construct()
    {
        $this->file = BASE_DIR . '/logs/' . date('Y_m_d') . '.log';
    }

    public function setLog(string $message): void
    {
        @file_put_contents($this->file, date('Y-m-d H:i:s') . ': ' . $message . PHP_EOL, FILE_APPEND | LOCK_EX);
    }

    public function getLog(): string
    {
        return file_get_contents($this->file);
    }

}