<?php
// Include PHPMailer library
require_once(__DIR__.'/../vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require '../vendor/phpmailer/phpmailer/src/Exception.php';
// require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require '../vendor/phpmailer/phpmailer/src/SMTP.php';

// Function to send email using PHPMailer

function sendMail($recipient) {

    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'exampple@gmail.com';
        $mail->Password = 'password'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port = 587; // Use 587 for TLS

        $mail->setFrom('donotreply@bharatxtechs.com', 'BharatX Technologies');
            $mail->clearAddresses(); // Clear previous recipient
            $mail->clearAttachments(); // Clear previous attachments if any

            $mail->addAddress($recipient['email'], $recipient['name']);
            
            if (isset($recipient['attachment'])) {
                $mail->addAttachment($recipient['attachment']);
            }
            
            $mail->isHTML(true); 
            // Set the subject and body for the current recipient
            $mail->Subject = $recipient['subject'];
            $mail->Body    = $recipient['body'];

            $mail->send(); 
        
        return true; 
    } catch (Exception $e) {
        error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        return false; 
    }
}

