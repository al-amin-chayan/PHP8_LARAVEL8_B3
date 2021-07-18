<?php
/*
 * Add an object initialization method inside of the Product class. With that construct
 * function get as parameter the name, description and price and assign them to instance
 * attributes of the same name.
 *  - create two objects (product1 and product2). When you will initialize the object you
 *    pass the three parameters (name, description and price)
 *  - Convert the class and property created in Product class and refactor it with the
 *    'constructor property promotion' shorthand syntax
 */

class Product {

    // protected string $name;
    // protected string $description;
    // protected float $price;

    // public function __construct(string $name, string $description, float $price)
    // {
    //     $this->name = $name;
    //     $this->description = $description;
    //     $this->price = $price;
    // }

    public function __construct(
        protected string $name, 
        protected string $description,
        protected float $price
    )
    {

    }

    // public function name(): string
    // {
    //     return $this->name;
    // }

    // public function description(): string
    // {
    //     return $this->description;
    // }

    // public function price(): string
    // {
    //     return $this->price;
    // }

    public function details(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ];
    }
}

$product1 = new Product('iPhone 12', 'iPhone 12 desc', 1000000);
$product1Details = $product1->details();
var_dump($product1Details['name']);