<?php
namespace Pondit;

use Pondit\Contracts\HasArea;

class Square extends Shape implements HasArea {

    protected int $length = 4;

    public function getArea(): float
    {
        return pow($this->length, 2);
    }
}

// 2 * 3 = 6
// 2 ** 3 = 8 => pow(2, 3)