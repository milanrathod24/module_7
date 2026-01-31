<?php
class BankAccount {
    // Private property 
    private $balance;

    // Constructor to initialize balance
    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    // Public method to deposit money
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    // Public method to withdraw money
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    // Public method to get balance (controlled access)
    public function getBalance() {
        return $this->balance;
    }
}

// Create an object
$account = new BankAccount(1000);

// Access data through public methods
$account->deposit(500);
$account->withdraw(200);

echo "Current Balance: " . $account->getBalance();
?>
