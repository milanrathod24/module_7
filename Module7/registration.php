<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>User Registration</h2>

<form method="post">
    Email: <br>
    <input type="text" name="email"><br><br>

    Password: <br>
    <input type="password" name="password"><br><br>

    <input type="submit" name="register" value="Register">
</form>

</body>
</html>

<?php
if (isset($_POST['register'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Regular Expressions
    $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $passwordPattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/";

    // Email validation
    if (!preg_match($emailPattern, $email)) {
        echo "<p style='color:red;'>Invalid email format</p>";
    }
    // Password validation
    elseif (!preg_match($passwordPattern, $password)) {
        echo "<p style='color:red;'>
        Password must be at least 6 characters and contain letters and numbers
        </p>";
    }
    else {
        echo "<p style='color:green;'>Registration Successful</p>";
    }
}
?>
