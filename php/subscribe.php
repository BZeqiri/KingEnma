<?php
$sub_email 	= $_POST['sub_email'];


$to = 'besartzeqiri54@gmail.com';
$subject = 'King Subscription';

$message = 'Subscription Request Received From King:<br/><br/>';
$message .= '<strong>Email : </strong>'.$sub_email.'<br/><br/>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$sub_email.'>' . "\r\n";

mail($to,$subject,$message,$headers);
echo 1;