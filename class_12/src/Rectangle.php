<?php
namespace Pondit;

use Pondit\Contracts\HasArea;

class Rectangle extends Shape implements HasArea {

    protected int $height = 10;
    protected int $weidth = 7;

    public function getArea(): float
    {
        return $this->height * $this->weidth;
    }
}