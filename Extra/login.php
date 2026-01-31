<?php
session_start();

// If cookie exists, auto login
if (isset($_COOKIE['remember_user'])) {
    $_SESSION['user'] = $_COOKIE['remember_user'];
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="post">
    Username:<br>
    <input type="text" name="username" required><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    <input type="checkbox" name="remember"> Remember Me<br><br>

    <input type="submit" name="login" value="Login">
</form>

<?php
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple check (for exam/demo)
    if ($username == "Milan" && $password == "12345") {

        // Create session
        $_SESSION['user'] = $username;

        // Set cookie if Remember Me checked
        if (isset($_POST['remember'])) {
            setcookie("remember_user", $username, time() + 3600);
        }

        header("Location: dashboard.php");
    } else {
        echo "<p style='color:red;'>Invalid login</p>";
    }
}
?>

</body>
</html>
