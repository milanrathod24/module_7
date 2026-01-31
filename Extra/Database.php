<?php
class Database {

    private $conn;

    // Constructor: connect to database
    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "test");

        if ($this->conn->connect_error) {
            die("Database connection failed");
        }
    }

    // Method to fetch users
    public function getUsers() {
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);

        return $result;
    }

    // Destructor: close connection
    public function __destruct() {
        $this->conn->close();
    }
}
?>
