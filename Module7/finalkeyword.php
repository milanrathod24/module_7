<?php
// Final class
final class SecuritySystem {

    public function accessSystem() {
        echo "Access granted.<br>";
    }
}

// Separate class (NOT extending final class)
class AdvancedSecurity {

    public function accessSystem() {
        echo "Advanced access granted.<br>";
    }
}

// Create object
$security = new SecuritySystem();
$security->accessSystem();
?>
