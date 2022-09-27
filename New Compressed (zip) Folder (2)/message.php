<?php
//get data from the form  

$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number= $_POST['phone'];
$subject= $_POST['subject'];



$to = "r.dsouza15@student.allsaints.york.sch.uk";



$subject = "Mail from Hot beans Web";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ." \r\n Phone number=". $number . "\r\n Subject =" . $subject;
$headers = "From: noreply@Hotbeansweb.com" . "\r\n" .
"CC: someoneelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:feed back message.png");
?>