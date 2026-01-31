<?php
require_once "Database.php";

// Create Database object
$db = new Database();

// Fetch users
$result = $db->getUsers();

echo "<h2>User List</h2>";

while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Name: " . $row['name'] . "<br>";
    echo "Email: " . $row['email'] . "<br><br>";
}
?>
