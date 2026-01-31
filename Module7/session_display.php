<?php
session_start();

// Retrieve session data
echo "Username: " . $_SESSION['username'] . "<br>";
echo "Email: " . $_SESSION['email'];
?>
