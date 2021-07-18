<?php
/*
 * Create a class name Product. Add properties (name, description and price) to the class Product.
 * - Instantiated object product1 and modify the property name for 'iPhone 12'
 * - Create a second object name product2 and set name property to 'iPhone 12 Pro'
 * - echo out that property from both object
*/

class Product {
    public ?string $name = null;
    public ?string $description = null;
    public float $price = 0;
}

$product1 = new Product();
$product1->name = 'iPhone 12';


$product2 = new Product();
$product2->name = 'iPhone 12 Pro';


echo '$product1=' . $product1->name;
echo PHP_EOL;
echo '$product2=' . $product2->name;