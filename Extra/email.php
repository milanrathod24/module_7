<?php
// Function to sanitize and validate email
function validateEmail($email) {

    // Sanitize email
    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate email
    if (!filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Invalid email address.");
    }

    return $sanitizedEmail;
}

// Test the function
try {
    $email = "milan@@gmail.com";   // change to test
    $validEmail = validateEmail($email);
    echo "Valid Email: " . $validEmail;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
