<?php
class Student {
    public $name;
    public $course;

    public function __construct($name, $course) {
        $this->name = $name;
        $this->course = $course;
    }

    public function displayStudent() {
        echo "Name: " . $this->name . "<br>";
        echo "Course: " . $this->course . "<br><br>";
    }
}

// Instantiate multiple objects
$student1 = new Student("Aryan", "Computer Science");
$student2 = new Student("Sara", "Information Technology");
$student3 = new Student("Sunny", "Software Engineering");

// Display details
$student1->displayStudent();
$student2->displayStudent();
$student3->displayStudent();
?>
