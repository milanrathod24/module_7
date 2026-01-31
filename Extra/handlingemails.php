<?php
// Function to validate email and send welcome email
function sendWelcomeEmail($email) {

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email address.";
    }

    // Email details
    $to = $email;
    $subject = "Welcome to Our Website";
    $message = "Thank you for registering with us. Welcome aboard!";
    $headers = "From: noreply@example.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        return "Welcome email sent successfully.";
    } else {
        return "Email sending failed.";
    }
}

// Test the function
$email = "milan@gmail.com";
echo sendWelcomeEmail($email);
?>
