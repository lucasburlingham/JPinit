<?php
use \home\lburlingham\PHPMailer\PHPMailer\PHPMailer;
use \home\lburlinghan\PHPMailer\PHPMailer\Exception;

require '/home/lburlingham/PHPMailer/src/Exception.php';
require '/home/lburlingham/PHPMailer/src/PHPMailer.php';
require '/home/lburlingham/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.dreamhost.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jpinit@cloud.golca.org';
    $mail->Password = 'lcauser-LB1';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>