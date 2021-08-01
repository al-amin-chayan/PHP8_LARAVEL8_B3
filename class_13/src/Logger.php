<?php
namespace Pondit;

interface Logger {

    public function setLog(string $message): void;

    public function getLog(): string;
}