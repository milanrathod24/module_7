<?php
// Trait for logging
trait Logger {
    public function log($message) {
        echo "Log: " . $message . "<br>";
    }
}

// Trait for notifications
trait Notifier {
    public function notify($message) {
        echo "Notification: " . $message . "<br>";
    }
}

// Class using both traits
class User {

    use Logger, Notifier;

    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function login() {
        $this->log($this->name . " logged in");
        $this->notify("Welcome " . $this->name);
    }
}

// Create object
$user = new User("Milan");

// Use methods
$user->login();
?>
