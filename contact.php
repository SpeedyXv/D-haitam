<?php
if (isset($_POST["submit"])) {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to      = 'speedrunsa3@gmail.com';
    $headers = "From: $email\r\n";
    $body    = "From: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.html");
        exit();
    } else {
        echo "Error sending email.";
    }
}
?>