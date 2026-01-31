<!DOCTYPE html>
<html>
<head>
    <title>Registration Validation</title>
</head>
<body>

<h2>User Registration</h2>

<form method="post">
    Username:<br>
    <input type="text" name="username"><br><br>

    Email:<br>
    <input type="text" name="email"><br><br>

    Password:<br>
    <input type="password" name="password"><br><br>

    <input type="submit" name="register" value="Register">
</form>

<?php
if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Regular expressions
    $usernamePattern = "/^[a-zA-Z0-9_]{3,15}$/";
    $emailPattern    = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $passwordPattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/";

    $errors = [];

    // Username validation
    if (!preg_match($usernamePattern, $username)) {
        $errors[] = "Username must be 3–15 characters (letters, numbers, underscore).";
    }

    // Email validation
    if (!preg_match($emailPattern, $email)) {
        $errors[] = "Invalid email format.";
    }

    // Password validation
    if (!preg_match($passwordPattern, $password)) {
        $errors[] = "Password must be at least 6 characters and contain letters and numbers.";
    }

    // Display result
    if (!empty($errors)) {
        echo "<ul style='color:red;'>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "<p style='color:green;'>Registration successful!</p>";
    }
}
?>

</body>
</html>
