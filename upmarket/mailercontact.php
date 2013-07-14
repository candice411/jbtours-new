<?php
//email form 
include "configcontact.php";

$name = $_REQUEST["name"];
$company = $_REQUEST["company"];
$contact = $_REQUEST["contact"];
$mobile = $_REQUEST["mobile"];
$email = $_REQUEST["email"];
$hearaboutus = $_REQUEST["hearaboutus"];
$enquiry = $_REQUEST["enquiry"];

$message = "$name has replied \n";
$message .= "Company Name: $company \n";
$message .= "Contact: $contact \n";
$message .= "Mobile: $mobile \n";
$message .= "Email: $email \n ";
$message .= "Hearaboutus: $hearaboutus\n ";
$message .= "Enquiry: $enquiry \n ";

$headers .= "From: $name <$email>\n";
$headers .= "X-Sender: <$email>\n";
$headers .= "X-Mailer: PHP\n"; //mailer
$headers .= "X-Priority: 3\n"; //1 UrgentMessage, 3 Normal
$headers .= "Return-Path: <$email>\n";

mail(CLIENT_EMAIL,SUBJECT,$message,$headers);
header("Location: ".POST_PAGE);	
?>
