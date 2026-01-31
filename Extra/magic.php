<?php
class User {

    private $data = [];

    // Magic method to set value dynamically
    public function __set($property, $value) {
        $this->data[$property] = $value;
    }

    // Magic method to get value dynamically
    public function __get($property) {
        if (array_key_exists($property, $this->data)) {
            return $this->data[$property];
        }
        return "Property not found";
    }
}

// Create object
$user = new User();

// Dynamically set properties
$user->name = "Milan";
$user->email = "milan@gmail.com";
$user->age = 21;

// Dynamically get properties
echo "Name: " . $user->name . "<br>";
echo "Email: " . $user->email . "<br>";
echo "Age: " . $user->age;
?>
