<?php
// send_mail.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Validate inputs
    if ( empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please complete the form correctly.";
        exit;
    }

    // Set the recipient email address (Put your dad's email here)
    $recipient = "info@integocorporates.com";

    // Build the email content
    $subject = "New Contact from $name";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    $email_headers = "From: $name <$email>";

    // Send the email
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Redirect back to home with success message
        echo "<script>alert('Thank you! Your message has been sent.'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong.'); window.location.href='index.php';</script>";
    }
} else {
    // Not a POST request
    header("Location: index.php");
}
?>