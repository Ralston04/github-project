<?php
//get data from the form  

$firstname = $_POST['firstname'];
$email= $_POST['email'];
$lastname= $_POST['lastname'];
$gender= $_POST['gender'];
$number= $_POST['phone'];
$CV= $_POST['CV'];



$to = "r.dsouza15@student.allsaints.york.sch.uk";



$subject = "confirmation details";
$txt ="Name = ". $first name . "\r\n  Email = " . $email . "\r\n Gender =" . $gender ." \r\n Phone number=". $number . "\r\n CV =" . $CV;
$headers = "From: noreply@Hotbeansweb.com" . "\r\n" .
"CC: someoneelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:message.png");
?>