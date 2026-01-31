<?php
class Calculator {

    // Method with type-hinted parameters and return type
    public function add(int $a, int $b): int {
        return $a + $b;
    }

    // Method accepting different data types
    public function greet(string $name): string {
        return "Hello, " . $name;
    }
}

// Create object
$calc = new Calculator();

// Correct usage
echo $calc->add(10, 20) . "<br>";
echo $calc->greet("Milan") . "<br>";

// Incorrect usage (will cause TypeError)
// echo $calc->add("10", "20");
?>
