<?php
$to = "kaushalbansal32@gmail.com";
$subject = $_POST['contactSubject'];
$txt = "First Name : ".$_POST['contactName']."<br>";
$txt .= "Email : ".$_POST['contactEmail']."<br>";
$txt .= "Subject : ".$_POST['contactSubject']."<br>";
$txt .= "Message: ".$_POST['contactMessage']."<br>";

$from=$_POST['contactEmail'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$from.'>' . "\r\n";

mail($to,$subject,$txt,$headers);
?>