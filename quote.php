<?php 
    $to = "adorngloballogistics@gmail.com"; // this is your Email address
    $from = $_POST['quote-request-email']; // this is the sender's Email address
    $name = $_POST['quote-request-name'];
    $email = $_POST['quote-request-email'];
    $phone=$_POST['quote-request-phone'];
    $serviceIntrested=$_POST['quote-request-service'];
    $service=$_POST['quote-request-interest[]'];
    $bestTimeToReach=$_POST['quote-request-reach'];
    $hearAboutUs=$_POST['quote-request-hear'];
    $message=$_POST['quote-request-message'];
    $company=$_POST['quote-request-company'];


     
    foreach($_POST['quote-request-interest'] as $value)
        $service =$service . "\t\t," .  $value ;
    


    $subject = "Adorn Global New Quote from " . $name . " Regarding " .$service;
    $message = $name . " wrote the following:" . "\n\n" . $_POST['quote-request-message'] . "\n\n" ."Email :" .  $_POST['quote-request-email'] ."\n\n". "Name : ".$name . "\n\n" . "Phone: ". $phone ."\n\n" . "Best Time to Reach: ". $bestTimeToReach ."\n\n" ."Hear About Us From: ". $hearAboutUs ."\n\n" . "Company Name: ". $company ."\n\n" . "Services: ". $service;
    $headers2 = "From:" . $from;
    if(mail($to, $subject,$message,$headers2))
    { echo "Email Sent"; }
    else
    { echo "Email Sending Failed";
    }
?>

