<?php

// Start Session (enable super global $_SESSION)
session_start();

// Load PHP Mailer
require_once "../libs/phpmailer/PHPMailerAutoload.php";

// Get Post arguments
if(isset($_POST["name"], $_POST["email"], $_POST["message"])) {

    // Assign arguments in a key/value array
    $fields = [
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "message" => $_POST["message"]
    ];

    // Validation
    foreach($fields as $field => $data) {

        if(empty($data)){
            $errors[] = "The " . $field . " field is required.";
        }

    }

    // Send Email if no errors
    if(empty($errors)) {

        // PHPMailer instance
        $mail = new PHPMailer;

        // PHPMailer configuration
        $mail->isSMTP();
        $mail->isSMTPAuth = true;
        $mail->Host = "smtp.gmail.com";
        $mail->Username = "user@gmail.com";
        $mail->Password = "yourPassword";
        $mail->SMTPSecure = "tls";
        $mail->Port = 465;

        $mail->isHTML(true);

        // Set Content
        $mail->Subject = "Contact form submitted.";
        $mail->Body = "From: " . $fields["name"] . " (" . $fields["email"] . ")<p>" . $fields["message"] . "</p>";

        // Send email and handle erros
        if($mail->send()) {
            header("Location: thanks.php");
            die();
        }

        else {
            $errors[] ="Sorry we could not send the email. Try Later.";
        }

    }

}

else {

    $errors[] = "Something went horribly wrong.";

}

// Set $_SESSION super global
$_SESSION["fields"] = $fields;
$_SESSION["errors"] = $errors;

// Redirect to index.php
header("Location: ../index.php");

?>