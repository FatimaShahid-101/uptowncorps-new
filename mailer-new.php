<?php

    // Get the form fields, removes html tags and whitespace.
    $name = $_POST["name"];
    $company = $_POST["company"];
    $service = $_POST["service"];
    $duration = $_POST["duration"];
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $number = $_POST["number"];

    $recipient = "info@uptowncorps.com";

    $subject = "New Quote from $name";

    $email_content = "Name: $name\n";
    $email_content .= "Message:\n$company\n";
    $email_content .= "Message:\n$service\n";
    $email_content .= "Message:\n$duration\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$number\n";

    $email_headers = "From: $name <$email>";

    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
  
    header("location:index.php?success=1#form");

?>