<!DOCTYPE html>
<html>
<head>
    <title>Registration with Email Confirmation</title>
</head>
<body>

<h2>User Registration</h2>

<form method="post">
    Username:<br>
    <input type="text" name="username" required><br><br>

    Email:<br>
    <input type="text" name="email" required><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    <input type="submit" name="register" value="Register">
</form>

<?php
if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Regular expression for email validation
    $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

    // Validate email
    if (!preg_match($emailPattern, $email)) {
        echo "<p style='color:red;'>Invalid email format.</p>";
    } else {

        // (Registration logic assumed successful)

        // Send confirmation email
        $to = $email;
        $subject = "Registration Successful";
        $message = "Hello $username,\n\nYour registration was successful. Welcome!";
        $headers = "From: noreply@example.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "<p style='color:green;'>Registration successful. Confirmation email sent.</p>";
        } else {
            echo "<p style='color:orange;'>Registration successful, but email could not be sent.</p>";
        }
    }
}
?>

</body>
</html>
