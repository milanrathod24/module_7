<?php
$conn = new mysqli("localhost", "root", "", "test");

$username = $_POST['username'];
$password = $_POST['password'];

// Prepared statement
$stmt = $conn->prepare(
    "SELECT * FROM users WHERE username = ? AND password = ?"
);

$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Login Successful";
} else {
    echo "Invalid Login";
}

$stmt->close();
$conn->close();
?>
