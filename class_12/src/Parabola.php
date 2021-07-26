<?php

namespace Pondit;

class Parabola extends Circle {
    
    public function getArea(): float
    {
        return M_PI * $this->redious ** 2;
    }
}