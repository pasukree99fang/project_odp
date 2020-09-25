<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require './vendor/autoload.php';

//require 'class.phpmailer.php'; // path to the PHPMailer class
      // require 'class.smtp.php';

// Instantiation and passing `true` enables exceptions
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
    $mail->addAddress('yanisa.18ns@mail.kmutt.ac.th', 'NS');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    //$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->msgHTML('Here is the subject');

    // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (phpmailerException $e) {
            echo $e->errorMessage(); // ข้อความ error จาก PHPMailer
        }
        catch (Exception $e) {
            echo $e->getMessage(); // ข้อความ error จากระบบ
        }

/*try {

    $mail->isSMTP();
    $mail->Host = "ssl://smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    //$mail->Host = gethostbyname('smtp.pepipost.com');

    // But you can comment from here
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->CharSet = "UTF-8";
    // To here. 'cause default secure is TLS.

    $mail->setFrom('from@example.com', 'Mailer');
    $mail->Username = "knockknockminayeon@gmail.com";
    $mail->Password = "imnayeontwice922";

    $mail->Subject = "Теsт";
    $mail->msgHTML("Test");
    $mail->addAddress("tassaneewanoita@gmail.com", "Mild");


        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }*/




        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        // $mail->isSMTP();                                            // Send using SMTP
        // $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        // $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        // $mail->Username   = 'yanisa.18ns@mail.kmutt.ac.th.com';                     // SMTP username
        // $mail->Password   = '!';                               // SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        // $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        // //Recipients
        // $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    
        // // Content
        // $mail->isHTML(true);                                  // Set email format to HTML
        // $mail->Subject = 'Here is the subject';
        // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
// <?php


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// date_default_timezone_set('Asia/Bangkok');
// require_once "vendor/autoload.php";

// //PHPMailer Object
// $mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//From email address and name
// $mail->From = "SELECT a.us_manager_id,";
// $mail->FromName = "noreply@odp-company";

// //To address and name
// $mail->addAddress("SELECT a.us_email,a.us_manager_id FROM tb_user a","recepient1@example.com", "Recepient Name");
// $mail->addAddress("recepient1@example.com"); //Recipient name is optional

// //Address to which recipient will reply
// $mail->addReplyTo("reply@yourdomain.com", "Reply");

// //CC and BCC
// $mail->addCC("cc@example.com");
// $mail->addBCC("bcc@example.com");

// //Send HTML or Plain Text email
// $mail->isHTML(true);

// $mail->Subject = "Subject Text";
// $mail->Body = "<i>Mail body in HTML</i>";
// $mail->AltBody = "This is the plain text version of the email content";

// try {
//     $mail->send();
//     echo "Message has been sent successfully";
// } catch (Exception $e) {
//     echo "Mailer Error: " . $mail->ErrorInfo;
//}