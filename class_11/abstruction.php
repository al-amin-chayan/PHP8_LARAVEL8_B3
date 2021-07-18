<?php

abstract class Vehicle {

    protected const CHARGE = 100;

    public function __construct(
        protected string $name, 
        protected float $max_speed,
        protected float $mileage,
        protected int $seatingCapacity,
    )
    {

    }

    public function start()
    {

    }

    public function stop()
    {
        
    }

    public function turn()
    {
        
    }

    abstract public function fare(): float;
}

class Bus extends Vehicle {

    public function fare(): float
    {
        return $this->seatingCapacity * self::CHARGE;
    }
}

class Car extends Vehicle {

    public function fare(): float
    {
        return 1000;
    }
}

$car = new Car('Toyota', 100, 1000, 6);
$bus = new Bus('Volvo', 100, 1000, 50);