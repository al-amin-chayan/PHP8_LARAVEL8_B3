<?php

use Pondit\Contracts\HasArea;
use Pondit\Land;
use Pondit\Parabola;
use Pondit\Rectangle;
use Pondit\SchoolLand;
use Pondit\Shape;
use Pondit\Square;

require 'vendor/autoload.php';

$square = new Square('red');
$rectangle = new Rectangle('green');

// var_dump($square->getArea());
// var_dump($rectangle->getArea());

$land = new Land();
$schoolLand = new SchoolLand();

function printArea(HasArea $shape) {
    echo $shape->getArea();
    echo PHP_EOL;
}

// printArea($rectangle);
// printArea($square);
// printArea($land);

// var_dump($land instanceof HasArea);
// var_dump($rectangle instanceof Rectangle);
// var_dump($rectangle instanceof Shape);

// var_dump($land instanceof SchoolLand);
// var_dump($schoolLand instanceof Land);

// var_dump(HasArea::PI);

// var_dump(Land::getAddress());

// var_dump((new Land)->getArea());

// var_dump(Shape::getPadding());

$parabola = new Parabola('white');

var_dump($parabola);