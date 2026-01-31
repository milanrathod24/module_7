<?php
// Define interface
interface VehicleInterface {
    public function start();
    public function stop();
}

// Implement interface in Car class
class Car implements VehicleInterface {
    public function start() {
        echo "Car is starting.<br>";
    }

    public function stop() {
        echo "Car is stopping.<br>";
    }
}

// Implement interface in Bike class
class Bike implements VehicleInterface {
    public function start() {
        echo "Bike is starting.<br>";
    }

    public function stop() {
        echo "Bike is stopping.<br>";
    }
}

// Create objects
$car = new Car();
$bike = new Bike();

// Call methods
$car->start();
$car->stop();

$bike->start();
$bike->stop();
?>
