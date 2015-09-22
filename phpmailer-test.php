<?php
    $email_to = "youremail@domain.com";
    $email_subject = "Test mail";
    $email_body = "Hello! This is a simple email message.";
    $headers = "From: ". $name . " <" . $email_to . ">\r\n";


    if(mail($email_to, $email_subject, $email_body, $headers)){
        echo "The email($email_subject) was successfully sent.";
    } else {
        echo "The email($email_subject) was NOT sent.";
    }
?>
