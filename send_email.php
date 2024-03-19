<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email details
    $to = "andreastanaj3@gmail.com"; // Change this to your email address
    $subject = "Contact Form Submission";
    $body = "Email: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>
