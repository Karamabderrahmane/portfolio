<?php
// Place this at the very top of your page
$formMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "karamziouchi@gmail.com"; // replace with your email
    $subject = "Contact form submission from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        $formMessage = "Message sent successfully!";
    } else {
        $formMessage = "Failed to send message.";
    }
}
?>
