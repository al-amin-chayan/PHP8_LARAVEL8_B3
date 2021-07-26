<?php
namespace Pondit\Contracts;

interface HasArea {

    public const PI = 3.14;

    // public int $something = 0;

    public function getArea(): float;

    // Interface does not allow protected methods
    // protected function setPadding();
}