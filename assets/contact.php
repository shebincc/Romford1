<?php
//get data from form  

$name = $_POST['username'];
$email= $_POST['email'];
$phone=$_POST['phone']
$message= $_POST['subject'];
$to = "ccshibin8@gmail.com";
$subject = "Mail From website" ;
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:Contact.html");
?>