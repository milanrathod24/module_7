<?php
class Person {

    public $name = "Milan";
    protected $age = 23;
    private $cnic = "12345-6789012-3";

    public function showPublic() {
        echo "Name (Public): " . $this->name . "<br>";
    }

    protected function showProtected() {
        echo "Age (Protected): " . $this->age . "<br>";
    }

    private function showPrivate() {
        echo "CNIC (Private): " . $this->cnic . "<br>";
    }

    public function showAll() {
        $this->showPublic();
        $this->showProtected();
        $this->showPrivate();
    }
}

// Child class
class Student extends Person {
    public function showStudentInfo() {
        echo "Name from Parent: " . $this->name . "<br>";
        echo "Age from Parent: " . $this->age . "<br>";
        // $this->cnic; ❌ Not accessible (private)
    }
}

// Create objects
$person = new Person();
$student = new Student();

// Access public
$person->showPublic();
$person->showAll();

$student->showStudentInfo();

// $person->age;   ❌ Error (protected)
// $person->cnic;  ❌ Error (private)
?>
