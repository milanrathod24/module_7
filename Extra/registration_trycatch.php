<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

<h2>User Registration</h2>

<form method="post">
    Name:<br>
    <input type="text" name="name" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    <input type="submit" name="register" value="Register">
</form>

<?php
if (isset($_POST['register'])) {

    $name  = $_POST['name'];
    $email = $_POST['email'];

    try {
        // Database connection using PDO
        $conn = new PDO(
            "mysql:host=localhost;dbname=test",
            "root",
            ""
        );

        // Enable exception mode
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // SQL query using prepared statement
        $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);

        // Execute query
        $stmt->execute();

        echo "<p style='color:green;'>Registration successful</p>";

    } catch (PDOException $e) {
        echo "<p style='color:red;'>Error: " . $e->getMessage() . "</p>";
    }
}
?>

</body>
</html>
