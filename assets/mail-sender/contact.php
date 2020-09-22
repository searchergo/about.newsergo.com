<?php


// Taking all values
$yourname 		= $_POST['yourname'];
$email 		= $_POST['email'];
$subject 		= $_POST['subject'];
$phone 		= $_POST['phone'];
$msg 		= $_POST['msg'];
$output 	= "Name: ".$yourname."\n\nsubject: ".$subject."\n\nphone: ".$phone."\n\nMessage: ".$msg;
$to 		= 'engrsamim7@gmail.com';
$headers	= 'FROM: "'.$email.'"';
$send = mail($to, $yourname, $output."\n\n***This message has been sent from Niksta", $headers);


