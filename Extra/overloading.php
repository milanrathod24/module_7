<?php
class Calculator {

    // Magic method for overloading
    public function __call($method, $arguments) {

        if ($method == "calculate") {

            // If 2 arguments → addition
            if (count($arguments) == 2) {
                return $arguments[0] + $arguments[1];
            }

            // If 3 arguments → multiplication
            if (count($arguments) == 3) {
                return $arguments[0] * $arguments[1] * $arguments[2];
            }

            // If 1 argument → subtraction from 0
            if (count($arguments) == 1) {
                return 0 - $arguments[0];
            }
        }

        return "Invalid operation";
    }
}

// Create object
$calc = new Calculator();

// Demonstrate overloading
echo "Addition: " . $calc->calculate(10, 5) . "<br>";
echo "Multiplication: " . $calc->calculate(2, 3, 4) . "<br>";
echo "Subtraction: " . $calc->calculate(8);
?>
