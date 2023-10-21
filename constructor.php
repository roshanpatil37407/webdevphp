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
        echo "A new person object has been created.\n";
    }
    
    // Method to greet
    public function greet() {
        echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.\n";
    }
}

// Create an object (instance) of the "Person" class
$person = new Person("John", 30);

// Access properties and call methods
$person->greet(); // Outputs: Hello, my name is John and I am 30 years old.
?>
