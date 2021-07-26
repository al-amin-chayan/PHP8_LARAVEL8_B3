<?php
namespace Pondit;

use Pondit\Contracts\HasArea;

class Land implements HasArea {

    public function getArea(): float
    {
        return 200;
    }

    public static function getAddress(): string
    {
        // var_dump((new self)->getArea());
        return 'Dhaka';
    }
}