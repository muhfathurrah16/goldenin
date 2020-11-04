<?php

    $suuccess = "";
    $error_message = "";

if(!empty($_POST["submit_email"])) {

    //First Option

    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from = "fatrah01071998@gmail.com";    
    $to = "hambaallah010798@gmail.com";    
    $subject = "Checking PHP mail";    
    $message = "PHP mail berjalan dengan baik";   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim.";

    
    // Second Option
    $to      = $_POST['email'];
    $subject = 'the subject';
    $message = 'hello bro';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    echo $_POST['email'];
    echo 'Email Sent.';


    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from    = "fatrah01071998@gmail.com", "Fathur Rahman";    
    $to      = $_POST['email'];   
    $subject = "Checking PHP mail";    
    $message = $_POST['text'];   

    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim.";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST MAIL</title>
</head>
<body>
    <button type="submit" name="submit"> submit </button>
</body>
</html>