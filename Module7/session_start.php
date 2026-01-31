<?php
session_start();

// Store data in session
$_SESSION['username'] = "Milan";
$_SESSION['email'] = "milan@gmail.com";

echo "Session data stored.<br>";
echo "<a href='session_display.php'>Go to display page</a>";
?>
