<?php
//email form 
include "config.php";
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];

$message = "$name has replied \n";
$message .= "Email: $email \n ";

$headers .= "From: $name <$email>\n";
$headers .= "X-Sender: <$email>\n";
$headers .= "X-Mailer: PHP\n"; //mailer
$headers .= "X-Priority: 3\n"; //1 UrgentMessage, 3 Normal
$headers .= "Return-Path: <$email>\n";

mail(CLIENT_EMAIL,SUBJECT,$message,$headers);
header("Location: ".POST_PAGE);	
?>
