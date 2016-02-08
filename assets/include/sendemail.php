<?php

require_once('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if( $_POST['template-contactform-name'] != '' AND $_POST['template-contactform-email'] != '' AND $_POST['template-contactform-message'] != '' ) {

        $name = $_POST['template-contactform-name'];
        $email = $_POST['template-contactform-email'];
        $phone = $_POST['template-contactform-phone'];
        $subject = $_POST['template-contactform-subject'];
        $message = $_POST['template-contactform-message'];

        $subject = isset($subject) ? $subject : 'New Message From Contact Form';

        $botcheck = $_POST['template-contactform-botcheck'];

        $toemail = 'contact@scpvs.org'; // Your Email Address
        $toname = 'Contact SCPVS'; // Your Name

        if( $botcheck == '' ) {

            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            $name = isset($name) ? "Name: $name<br><br>" : '';
            $email = isset($email) ? "Email: $email<br><br>" : '';
            $phone = isset($phone) ? "Phone: $phone<br><br>" : '';
            $message = isset($message) ? "Message: $message<br><br>" : '';

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>Ce formulaire à été soumis depuis l\'adresse suivante: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $email $phone $message $referrer";

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();

            if( $sendEmail == true ):
                echo 'Nous avons reçu votre message, le temps de traitement est de <strong>24 Heure</strong> en moyenne.';
            else:
                echo "L'email n'est pas partie à cause d'une erreur inconnue. Veuillez réessayer plus tard.<br /><br /><strong>Raison possible:</strong><br />" . $mail->ErrorInfo;
            endif;
        } else {
            echo 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
        }
    } else {
        echo 'Please <strong>Fill up</strong> all the Fields and Try Again.';
    }
} else {
    echo 'An <strong>unexpected error</strong> occured. Please Try Again later.';
}

?>