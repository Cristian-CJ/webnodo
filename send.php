<?php
    $destination="info@webnodo.com";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $cont = "Name: " . $name . "\nemail: " . $email . "\n" . $message;
    mail($destination,"Webnodo",$cont);
    header("location:thanks.html");
?>