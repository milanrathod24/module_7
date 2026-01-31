<?php
class Calculator {

    // Magic method for overloading
    public function __call($method, $arguments) {

        if ($method == "add") {

            if (count($arguments) == 2) {
                return $arguments[0] + $arguments[1];
            } 
            elseif (count($arguments) == 3) {
                return $arguments[0] + $arguments[1] + $arguments[2];
            }
        }

        return "Invalid method or parameters";
    }
}

// Create object
$calc = new Calculator();

// Call overloaded method
echo $calc->add(5, 10) . "<br>";        // 2 parameters
echo $calc->add(5, 10, 15) . "<br>";    // 3 parameters
?>
