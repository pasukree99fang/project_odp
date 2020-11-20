<?php
require '../PHPMailer-master/vendor/autoload.php';
function sendEmail($email,$title,$message) {
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->Debugoutput = 'html';                      // Enable verbose debug output
        //$mail->Host       = gethostbyname('smtp.gmail.com');                 // Set the SMTP server to send through
        // $mail->SMTPAutoTLS = false;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'odponlinedocumentcompany@gmail.com';                     // SMTP username
        $mail->Password   = 'odp006063107';                               // SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        // $mail->Port = 587;

        //Recipients
        $mail->setFrom('odponlinedocumentcompany@gmail.com', 'noreply@odpcompany');
        $mail->addAddress($email, 'NS');     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        //$mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $title;
        $mail->msgHTML($message);

        // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); // ข้อความ error จาก PHPMailer
    }
}
