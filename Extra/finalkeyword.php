<?php
// Base class
class Animal {
    public function makeSound() {
        echo "Animal makes a sound<br>";
    }
}

// Final class
final class Dog extends Animal {
    public function makeSound() {
        echo "Dog barks<br>";
    }
}

// Create object
$dog = new Dog();
$dog->makeSound();
?>
