<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require 'vendor/autoload.php';
    
    function sendEmail($to, $subject, $body, $altBody = '', $attachments = [], $cc = [], $bcc = []) {
        $mail = new PHPMailer(true);
    
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                    // Disable verbose debug output
            $mail->isSMTP();                                       // Send using SMTP
            $mail->Host       = 'smtp.example.com';                // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                              // Enable SMTP authentication
            $mail->Username   = 'user@example.com';                // SMTP username
            $mail->Password   = 'secret';                          // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;       // Enable implicit TLS encryption
            $mail->Port       = 465;                               // TCP port to connect to
    
            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress($to);                                // Add a recipient
            $mail->addReplyTo('info@example.com', 'Information');
    
            // Add CC recipients
            foreach ($cc as $ccEmail) {
                $mail->addCC($ccEmail);
            }
    
            // Add BCC recipients
            foreach ($bcc as $bccEmail) {
                $mail->addBCC($bccEmail);
            }
    
            // Attachments
            foreach ($attachments as $attachment) {
                if (is_array($attachment)) {
                    $mail->addAttachment($attachment['path'], $attachment['name']);
                } else {
                    $mail->addAttachment($attachment);
                }
            }
    
            // Content
            $mail->isHTML(true);                                    // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = $altBody ?: strip_tags($body);
    
            $mail->send();
            return ['status' => 'success', 'message' => 'Message has been sent'];
        } catch (Exception $e) {
            return ['status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"];
        }
    }
?>