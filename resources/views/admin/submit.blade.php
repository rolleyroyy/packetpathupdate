<?php

    if(isset($_POST['save']))
{

        $to = "contact@packetp.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
    $phone = $_POST['phone'];
    $organization = $_POST['organization'];
        $messag = $_POST['message'];
        $subject = "Form submission Data";
        $subject2 = "Copy of your form submission";
        $message = "Name :- ".$name . "\n\nEmail :- " .$from."\n\nPhone Number :- ". $phone ."\n\nOrganization :- ".$organization. "\n\n wrote the following message :-" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
    
        mail($to,$subject,$message,$headers);
    
        echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
        // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>
