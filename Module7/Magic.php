<?php
class User {
    private $data = [];

    // Magic method for setting property
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    // Magic method for getting property
    public function __get($name) {
        return $this->data[$name] ?? "Property not found";
    }

    // Constructor
    public function __construct() {
        echo "User object created.<br>";
    }
}

// Create object
$user = new User();

// Set properties dynamically
$user->name = "Milan";
$user->email = "Milan@gmail.com";

// Get properties dynamically
echo "Name: " . $user->name . "<br>";
echo "Email: " . $user->email . "<br>";
echo "Age: " . $user->age . "<br>"; // undefined property
?>
