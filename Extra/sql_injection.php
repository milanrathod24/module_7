<?php
$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
    die("Connection failed");
}

/*PART 1: VULNERABLE CODE */

echo "<h3>Vulnerable Login (SQL Injection Possible)</h3>";

$username = "' OR '1'='1";   // attacker input
$password = "anything";

$sql = "SELECT * FROM users WHERE name='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "Login successful (VULNERABLE)<br>";
} else {
    echo "Login failed<br>";
}

/* PART 2: SECURE CODE */

echo "<h3>Secure Login (Prepared Statement)</h3>";

$username = "Milan";
$password = "12345";

$stmt = $conn->prepare(
    "SELECT * FROM users WHERE name=? AND password=?"
);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Login successful (SECURE)";
} else {
    echo "Login failed";
}

$stmt->close();
$conn->close();
?>
