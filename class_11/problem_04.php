<?php
/*
 * Create a class Person with attributes: name and age of type string.
 * Create a display() method that displays the name and age of an object created via
 * the Person class.
 * - Create a child class Student which inherits from the Person class and which also
 *   has a section attribute.
 * - Create a method displayStudent() that displays the name, age and section of an
 *   object created via the Student class.
 * - Create a student object via an instantiation on the Student class and then test the
 *   displayStudent method
 */

class Person {

    public function __construct(
        protected string $name,
        protected int $age
    )
    {

    }

    public function display(): array
    {
        return [
            $this->name,
            $this->age
        ];
    }
}

class Student extends Person {

    public function __construct(
        protected string $name,
        protected int $age,
        protected string $section
    )
    {

    }
    
    public function displayStudent(): array
    {
        return [
            $this->name,
            $this->age,
            $this->section
        ];
    }
}

$student = new Student('Abdur Rahim', 12, 'A');

list($stdName, $stdAge, $stdSection) = $student->displayStudent();
// list($stdName) = $student->displayStudent();
// list(, $stdAge) = $student->displayStudent();
// list(, , $stdSection) = $student->displayStudent();

var_dump($stdAge);
