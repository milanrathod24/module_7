<?php
try {
    // Database connection
    $conn = new PDO(
        "mysql:host=localhost;dbname=test",
        "root",
        ""
    );

    // Enable exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Database connected successfully.<br>";

    // SQL Query
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo "Query executed successfully.<br>";

} catch (PDOException $e) {

    // Handle connection or query error
    echo "Error: " . $e->getMessage();

} finally {

    // Close connection
    $conn = null;
    echo "<br>Connection closed.";
}
?>
