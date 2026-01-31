<?php
class Student {

    private $name;
    private $age;
    private $grade;

    // Constructor
    public function __construct($name, $age, $grade) {
        $this->name  = $name;
        $this->age   = $age;
        $this->grade = $grade;
    }

    // Method to display details
    public function displayDetails() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Grade: " . $this->grade . "<br>";
    }
}

// Create object
$student1 = new Student("Milan", 20, "A");

// Display student details
$student1->displayDetails();
?>
