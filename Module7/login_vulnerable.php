<?php
$conn = new mysqli("localhost", "root", "", "test");

$username = $_POST['username'];
$password = $_POST['password'];

// Vulnerable query
$sql = "SELECT * FROM users 
        WHERE username='$username' AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login Successful";
} else {
    echo "Invalid Login";
}
?>
