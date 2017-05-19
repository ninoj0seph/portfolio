<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$from = 'From: Your Portfolio';
$to = 'ninojoseph.tugade@gmail.com';
$message = $_POST['message'];

$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
}
?>
