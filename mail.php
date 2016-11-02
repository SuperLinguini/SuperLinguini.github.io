<?php $name = $_POST['inputName'];
$email = $_POST['inputEmail'];
$message = $_POST['message'];
$formcontent = "From: $name \n Message: $message";
$recipient = "l.milind24@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you!";
?>