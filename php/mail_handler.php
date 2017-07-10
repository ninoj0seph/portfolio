<?php
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
$from = 'From: Your Portfolio';
$to = 'ninojoseph.tugade@gmail.com';
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
}
?>
