<?php
// First trait
trait Logger {
    public function logMessage($message) {
        echo "Log: " . $message . "<br>";
    }
}

// Second trait
trait Notifier {
    public function sendNotification($text) {
        echo "Notification: " . $text . "<br>";
    }
}

// Class using multiple traits
class UserService {
    use Logger, Notifier;

    public function performAction() {
        $this->logMessage("User action performed");
        $this->sendNotification("Action completed successfully");
    }
}

// Create object
$service = new UserService();
$service->performAction();
?>
