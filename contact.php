<?php
if(isset( $_POST['fname']))
$name = $_POST['fname'];
if(isset( $_POST['city']))
$email = $_POST['city'];
if(isset( $_POST['email']))
$email = $_POST['email'];


$content="From: $name";
$recipient = "greenoctober1018@aol.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>