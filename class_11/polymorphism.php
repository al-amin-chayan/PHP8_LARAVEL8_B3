<?php

interface CanGreet {
    public function greet(): string;
}


class Person implements CanGreet {
    public function greet(): string
    {
        return 'Hi';
    }
}

class Bangali extends Person {
    public function greet(): string
    {
        return 'Kamon Asan?';
    }
}

class French extends Person {
    public function greet(): string
    {
        return 'Hello';
    }
}

class German extends Person {
    public function greet(): string
    {
        return '11111';
    }
}

$jon = new French();
var_dump($jon->greet());

$rahim = new Bangali();
var_dump($rahim->greet());