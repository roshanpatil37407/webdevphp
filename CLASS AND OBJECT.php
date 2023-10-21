<?php
// Define a class called "Person"
class Person {
    // Properties (attributes)
    public $name;
    public $age;
    
    // Constructor method
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    // Method to greet
    public function greet() {
        echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.\n";
    }
}

// Create objects (instances) of the "Person" class
$person1 = new Person("John", 30);
$person2 = new Person("Alice", 25);

// Access properties and call methods
$person1->greet(); // Outputs: Hello, my name is John and I am 30 years old.
$person2->greet(); // Outputs: Hello, my name is Alice and I am 25 years old.
?>
