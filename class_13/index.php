<?php

require 'vendor/autoload.php';

define('BASE_DIR', __DIR__);

use Pondit\DbLogger;
use Pondit\ErrorLogger;
use Pondit\EsLogger;
use Pondit\FileLogger;
use Pondit\MyBook;



// Problem-01
// use Pondit\Circle;

// $circle1 = new Circle(11);
// echo $circle1->getArea();
// echo PHP_EOL;
// echo $circle1->getPerimeter();

// Problem-02

// $book = new MyBook();
// $book->setTitle('English For Today');
// echo $book->getTitle();

// Problem-03

// $logger = new ErrorLogger(
//     new EsLogger()
// );

// try {
//     throw new Exception('Something went wrong');
// } catch (\Exception $ex) {
//     $logger->error($ex);
// }

// try {
//     throw new Exception('Another wrong');
// } catch (\Exception $ex) {
//     $logger->error($ex);
// }

// echo $logger->report();