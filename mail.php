<?php
$to = 'alexanderv@isbreda.com';
$subject = 'Hello, world!';
$message = 'This is a test email from PHP.';
$headers = 'From: alexanderv@isbreda.com';

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Email sending failed.';
}
?>
