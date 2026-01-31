<?php
$to = "test@example.com";   // receiver email
$subject = "Test Email from PHP";
$message = "This is a test email sent using PHP mail() function.";
$headers = "From: noreply@example.com";

// Validate email
if (filter_var($to, FILTER_VALIDATE_EMAIL)) {

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }

} else {
    echo "Invalid email address.";
}
?>
