<?php

namespace Pondit;

class Circle {

    public function __construct(public float $radius)
    {
    }

    public function getArea(): float
    {
        return M_PI * $this->radius ** 2;
    }

    public function getPerimeter(): float
    {
        return 2 * M_PI * $this->radius;
    }
}