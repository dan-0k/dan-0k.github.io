<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = danielj05okeefe@gmail.com ;

$email_body = "user name:" $name.\n.
"user Email: " $visitor_email.\n.
"user message:" $message .\n;


$to = "From: $email_from \r\n"

$headers .= "Reply-to: $visitor_email \r\n"

mail($to,$email_body,$headers);

header("Location: contact.html");





?>
