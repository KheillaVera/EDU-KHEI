<?php
// send_mail.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Sanitize input
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // 2. Validate input
    if ( empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Error: Redirect back to index.html
        echo "<script>alert('Please complete the form correctly.'); window.location.href='index.html';</script>";
        exit;
    }

    // 3. Email Settings
    // IMPORTANT: Change this to your actual email address
    $recipient = "info@integocorporates.com";

    // 4. Build Email
    $subject = "Intego Inquiry from: $name";
    
    $email_content = "You have received a new message from the Intego Corporates website.\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    $email_headers = "From: $name <$email>";

    // 5. Send and Redirect
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Success: Redirect to index.html
        echo "<script>alert('Thank you! Your message has been sent successfully.'); window.location.href='index.html';</script>";
    } else {
        // Failure: Redirect to index.html
        echo "<script>alert('Oops! Something went wrong. Please try again later.'); window.location.href='index.html';</script>";
    }

} else {
    // If user tries to access this file directly, send them home
    header("Location: index.html");
    exit;
}
?>