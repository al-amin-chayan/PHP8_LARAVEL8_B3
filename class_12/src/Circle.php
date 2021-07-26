<?php
namespace Pondit;

use Pondit\Contracts\HasArea;
use Pondit\Contracts\SetPadding;

final class Circle extends Shape implements HasArea, SetPadding {

    protected int $redious = 10;

    final public function getArea(): float
    {
        return M_PI * $this->redious ** 2;
    }

    public function setPadding(): void
    {
        
    }
}