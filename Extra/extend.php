<?php
// Base class
class Employee {

    protected $name;
    protected $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getEmployeeDetails() {
        return "Name: " . $this->name . ", Salary: " . $this->salary;
    }
}

// Subclass: Full Time Employee
class FullTimeEmployee extends Employee {

    public function calculateBonus() {
        // 20% bonus
        return $this->salary * 0.20;
    }
}

// Subclass: Part Time Employee
class PartTimeEmployee extends Employee {

    public function calculateBonus() {
        // 10% bonus
        return $this->salary * 0.10;
    }
}

// Create objects
$fullTime = new FullTimeEmployee("Sahil", 50000);
$partTime = new PartTimeEmployee("Milan", 30000);

// Display output
echo "<h3>Full Time Employee</h3>";
echo $fullTime->getEmployeeDetails() . "<br>";
echo "Bonus: " . $fullTime->calculateBonus();

echo "<h3>Part Time Employee</h3>";
echo $partTime->getEmployeeDetails() . "<br>";
echo "Bonus: " . $partTime->calculateBonus();
?>
