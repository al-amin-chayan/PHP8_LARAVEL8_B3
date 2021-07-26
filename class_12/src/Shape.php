<?php

namespace Pondit;


abstract class Shape {

    public function __construct(protected string $color)
    {
        
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public static function getPadding(): int
    {
        return 10;
    }
    
    abstract public function getArea(): float;
}