<?php
        if (isset($_POST["submit"])) {
            $name        = $_POST['fullname'];
            $email       = $_POST['email'];
            $subject        = $_POST['subject'];
            $content        = $_POST['content'];
            $formcontent = "Name : $name\n
                            Email : $email \n 
                            Subject : $subject \n 
                            Message: $content \n";
            $recipient   = "akhilremashan@yahoo.com";
            $subject     = "Enquiry";
            $mailheader  = "From: $name <$email> \r\n";
            // mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
            // echo "The email message was sent.";
        }
?>