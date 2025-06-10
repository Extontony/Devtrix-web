<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "muyambiexton@gmail.com";
    $subject = "New Contact Form Message";
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent! Thank you.";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}
?>
