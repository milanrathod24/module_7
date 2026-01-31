<?php
class Student {
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Method to display details
    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

// Create object (constructor is called automatically)
$student1 = new Student("Milan", 20);

// Display data
$student1->displayInfo();
?>
