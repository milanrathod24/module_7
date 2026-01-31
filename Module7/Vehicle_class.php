<?php
// Parent class
class Vehicle {
    public $brand;
    public $speed;

    public function __construct($brand, $speed) {
        $this->brand = $brand;
        $this->speed = $speed;
    }

    public function start() {
        echo "The vehicle is starting.<br>";
    }

    public function getSpeed() {
        echo "Speed: " . $this->speed . " km/h<br>";
    }
}

// Child class
class Car extends Vehicle {
    public $fuelType;

    public function __construct($brand, $speed, $fuelType) {
        // Call parent constructor
        parent::__construct($brand, $speed);
        $this->fuelType = $fuelType;
    }

    public function carDetails() {
        echo "Brand: " . $this->brand . "<br>";
        echo "Fuel Type: " . $this->fuelType . "<br>";
    }
}

// Create object of Car class
$car = new Car("Toyota", 180, "Petrol");

// Call inherited and own methods
$car->start();          // inherited method
$car->getSpeed();       // inherited method
$car->carDetails();     // child class method
?>
