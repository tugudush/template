<?php
require('../config.inc.php');
require('../functions.inc.php');
require('phpmailer/PHPMailerAutoload.php');

//echo 'Response...<br>';

//display_paths();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sender_name = $_POST['sender_name'];
    $sender_email = $_POST['sender_email'];
    $sender_subject = $_POST['sender_subject'];
    $sender_message = $_POST['sender_message'];
    
    $body_message = "From: $sender_name ($sender_email)\r\nSubject: $sender_subject\r\nMessage: $sender_message\r\n";
    $body_message .= "This message was sent via $base_url/#contact";
    
    $mail = new PHPMailer;    
    
    /*
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host = "box831.bluehost.com";
    $mail->Port = 465;
    $mail->SMTPAuth = true;    
    $mail->Username = "contactform@theshiftleft.com";    
    $mail->Password = "dB)W3vp'yP+(E%";
    */
    
    
    $mail->setFrom('contactform@foxzee.life', 'Foxzee Contact Form');
    $mail->addReplyTo($sender_email, $sender_name);
    $mail->addAddress('goodtimes@foxzee.life', 'Foxzee Bar');
    $mail->addCC('jerome2kph@gmail.com', 'Jerome Gomez');
    $mail->addCC('nmcphee@test.com.au', 'Nicholas McPhee');
    $mail->Subject = 'Inquiry From Foxzee Website: '.$sender_subject;
    
    //$mail->msgHTML(file_get_contents('phpmailer/examples/contents.html'), dirname(__FILE__));
    
    $mail->Body = $body_message;
    
    if (!$mail->send()) {
        $emergency_email = 'jerome2kph@gmail.com';
        echo '<span class="error">Mailer Error: ' . $mail->ErrorInfo;
        echo ' Please contact us directly at <a href="mailto: '.$emergency_email.'?subject=Inquiry on Shift Left">'.$emergency_email.'</a></span>';
    } else {
        echo "Message sent!";
    }    
} // end of if ($_SERVER['REQUEST_METHOD'] == 'POST')
?>
