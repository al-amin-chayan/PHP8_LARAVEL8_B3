<?php
namespace Pondit;

abstract class Book
{
    public ?string $title = null;
    
    public function getTitle(): string
    {
        return $this->title;
    }
    
    abstract public function setTitle(string $title): void;
    
}
