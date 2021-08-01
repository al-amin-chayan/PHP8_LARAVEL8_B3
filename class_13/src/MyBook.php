<?php
namespace Pondit;

class MyBook extends Book {

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}