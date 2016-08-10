<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $prenom = strip_tags(trim($_POST["txt_prenom"]));
        $nom = strip_tags(trim($_POST["txt_nom"]));
        $phone = strip_tags(trim($_POST["txt_phone"]));
        $email = filter_var(trim($_POST["txt_mail"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["txt_message"]);

        // Check that data was sent to the mailer.
        if ( empty($prenom) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        $recipient = "thirteendeep@gmail.com, audreyjacques@me.com";
        $subject = "Demande d'information - web";

        $email_content = "Demande d'information de : $prenom $nom \nTéléphone: $phone\nCourriel: $email \n\n Message:\n$message";

        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "1";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "0";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "0";
    }
?>
