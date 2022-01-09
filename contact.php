<?php 
    $to = "adorngloballogistics@gmail.com"; // this is your Email address
    $from = $_POST['contact-email']; // this is the sender's Email address
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $phone=$_POST['contact-phone'];
    $service=$_POST['contact-service'];
    $message=$_POST['contact-message'];
    $subject = "Adorn Global New Query from " . $name . " Regarding " . $service;
    $message = $name . " wrote the following:" . "\n\n" . $_POST['contact-message'] . "\n\n" ."Email :" .  $_POST['contact-email'] ."\n\n". "Name : ".$name . "\n\n" . "Phone: ". $phone;
    $headers2 = "From:" . $from;
    if(mail($to, $subject,$message,$headers2))
    { echo "Email Sent"; }
    else
    { echo "Email Sending Failed";
    }
?>

