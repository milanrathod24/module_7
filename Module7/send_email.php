<!DOCTYPE html>
<html>
<head>
    <title>Registration with Email</title>
</head>
<body>

<h2>User Registration</h2>

<form method="post">
    Email: <br>
    <input type="email" name="email" required><br><br>

    Password: <br>
    <input type="password" name="password" required><br><br>

    <input type="submit" name="register" value="Register">
</form>

<?php
if (isset($_POST['register'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validation using regex
    $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $passwordPattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/";

    if (!preg_match($emailPattern, $email)) {
        echo "<p style='color:red;'>Invalid email format</p>";
    }
    elseif (!preg_match($passwordPattern, $password)) {
        echo "<p style='color:red;'>Password must contain letters, numbers and be at least 6 characters</p>";
    }
    else {
        // Send confirmation email
        $to = $email;
        $subject = "Registration Successful";
        $message = "Welcome! Your registration was successful.";
        $headers = "From: noreply@example.com";

        mail($to, $subject, $message, $headers);

        echo "<p style='color:green;'>Registration successful. Confirmation email sent.</p>";
    }
}
?>

</body>
</html>
