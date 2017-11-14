<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendEmail($to, $subject, $htmlContent, $textContent=''){
  global $config;
  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $config['MAIL_HOST'];
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->Username = $config['MAIL_USERNAME'];  // SMTP username
    $mail->Password = $config['MAIL_PASSWORD'];  // SMTP password
    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                         // TCP port to connect to

    $mail->SMTPOptions = array(
      'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      )
    );
    //Recipients
    $mail->setFrom('aurelien.mojak@gmail.com', 'Aurel');
    $mail->addAddress($to, '');     // Add a recipient
             // Name is optional

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $htmlContent;
    $mail->AltBody = $textContent='';

    $mail->send();
    echo 'Message has been sent';
  } catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  }
}
