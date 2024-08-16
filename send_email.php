<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email details
    $to = "d.m.j.vlemmings@lacdr.leidenuniv.nl";  // Replace with your email address
    $emailSubject = "New Contact Form Submission Templeton Webpage: " . $subject;
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $fullMessage = "Name: $name\n";
    $fullMessage .= "Email: $email\n";
    $fullMessage .= "Message:\n$message";

    // Send email
    mail($to, $emailSubject, $fullMessage, $headers);

    // Redirect to a thank you page (optional)
    header('Location: thank_you.html');
    exit();
} else {
    // Redirect back to the form if accessed directly
    header('Location: contact.html');
    exit();
}
?>
