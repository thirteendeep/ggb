<?php
    echo "coucou";
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $prenom = strip_tags(trim($_POST["txt_prenom"]));
		$prenom = str_replace(array("\r","\n"),array(" "," "),$prenom);
        $nm = strip_tags(trim($_POST["txt_nom"]));
		$nom = str_replace(array("\r","\n"),array(" "," "),$nom);
        $phone = strip_tags(trim($_POST["txt_phone"]));
		$phone = str_replace(array("\r","\n"),array(" "," "),$phone);
        $email = filter_var(trim($_POST["txt_mail"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["txt_message"]);

        // Check that data was sent to the mailer.
        if ( empty($prenom) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        $recipient = "thirteendeep@gmail.com";
        $subject = "Demande d'information - web";

        $email_content = "Demande d'information de : $prenom." ".$nom\n";
        $email_content .= "Téléphone: $phone\n\n";
        $email_content .= "Courriel: $email\n\n";
        $email_content .= "Message:\n$message\n";

        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
