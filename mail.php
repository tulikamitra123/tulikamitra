<?php


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From: ".$name."<".$email.">\r\n";
$recipient = 'tulika.mitra130702@gmail.com';

mail($recipient, $subject, $message, $mailheader)
or die("Error! sorry try again next time :)");
echo "gotcha! Thank you for you message";

 
?>


