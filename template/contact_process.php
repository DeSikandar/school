<?php

    $to = "youmailaddress@mailprovider.com";
    $from = $_REQUEST['email'];
    $fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$phone = $_REQUEST['phone'];
	$message = $_REQUEST['message'];
    $headers = "From: $from";
    $subject = "You have a message from your EducationPress HTML template.";

    $fields = array();
    $fields{"fname"} = "fname";
	 $fields{"lname"} = "lname";
    $fields{"email"} = "email";
    $fields{"phone"} = "phone";
    $fields{"message"} = "message";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
