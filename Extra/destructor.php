<?php
class DatabaseConnection {

    private $conn;

    // Constructor: connect to database
    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "test");

        if ($this->conn->connect_error) {
            die("Connection failed");
        }

        echo "Database connected successfully.<br>";
    }

    // Destructor: close database connection
    public function __destruct() {
        if ($this->conn) {
            $this->conn->close();
            echo "Database connection closed.";
        }
    }
}

// Create object
$db = new DatabaseConnection();

// Object destroyed automatically at end of script
?>
