<?php
/*
 * Create a Vehicle class with name, max_speed,mileage and seating_capacity attributes.
 * The default fare charge of any vehicle is seating capacity * 100. Create a child class Bus
 * that will inherit all of the variables and methods of the Vehicle class.
 *  - If Vehicle is Bus instance, we need to add an extra 10% on full fare as a
 *    maintenance charge. So total fare for bus instances will become the 
 *    final amount = total fare + 10% of the total fare.
 *  - Note: The bus seating capacity is 50. so the final fare amount should be 5500. You
 *    need to override the fare() method of a Vehicle class in Bus class.
 */

class Vehicle {

    protected const CHARGE = 100;

    public function __construct(
        protected string $name, 
        protected float $max_speed,
        protected float $mileage,
        protected int $seatingCapacity,
    )
    {

    }

    public function fare(): float
    {
        return $this->seatingCapacity * self::CHARGE;
    }
}

class Bus extends Vehicle {
    private const FUEL_FARE_PERCENT = 10;
    private const MAX_SEAT_CAPACITY = 50;

    protected int $seatingCapacity;
    public function __construct(
        protected string $name, 
        protected float $max_speed,
        protected float $mileage,
        int $seatingCapacity
    )
    {
        if ($seatingCapacity > self::MAX_SEAT_CAPACITY) {
            throw new Exception('Out of capacity exception');
        }

        $this->seatingCapacity = $seatingCapacity;
    }

    public function fare(): float
    {
        $fare = parent::fare();
        $charge = $fare * (self::FUEL_FARE_PERCENT/100);
        return $fare + $charge;
    }
}

try {
    $bus = new Bus('School Bus', 60, 1000, 50);
    var_dump($bus->fare());
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
