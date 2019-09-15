<?php
    $to = 'kontakt@renityhost.de';
    $subject = 'Kontaktformular: '.$_POST["name"]."(".$_POST["email"].")";
    $message = $_POST["anliegen"];
    $from = $_POST["email"];

    // Sending email
    if(mail($to, $subject, $message)){
        echo 'Your mail has been sent successfully.';
        header('Location: ../index.php');
    } else{
        echo 'Unable to send email. Please try again.';
    }

?>