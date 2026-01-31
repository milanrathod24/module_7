<?php
function secureEmail($email) {

    // Sanitize email
    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate email
    if (filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
        return $sanitizedEmail;
    } else {
        return false;
    }
}

// Example usage
$userEmail = "milan@example.com";

$validatedEmail = secureEmail($userEmail);

if ($validatedEmail) {
    echo "Valid Email: " . $validatedEmail;
    // mail($validatedEmail, "Subject", "Message"); // send email
} else {
    echo "Invalid Email Address";
}
?>
