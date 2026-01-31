<?php
// Base class
class Account {

    public $username;          // public
    private $password;         // private
    protected $accountBalance; // protected

    public function __construct($username, $password, $balance) {
        $this->username = $username;
        $this->password = $password;
        $this->accountBalance = $balance;
    }

    // Public method to access private password
    public function getPassword() {
        return $this->password;
    }
}

// Derived class
class UserAccount extends Account {

    public function showDetails() {
        echo "Username: " . $this->username . "<br>";
        echo "Account Balance: " . $this->accountBalance . "<br>";

    
    }
}

// Create object
$user = new UserAccount("Milan", "12345", 5000);

// Access public property
echo "Public Username: " . $user->username . "<br><br>";

// Access protected property via derived class
$user->showDetails();

// Access private property using public method
echo "Password (via method): " . $user->getPassword();
?>
