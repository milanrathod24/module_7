<?php
session_start();

// Check login
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['user']; ?></h2>

<p>You are logged in using session.</p>

<a href="logout.php">Logout</a>

</body>
</html>
