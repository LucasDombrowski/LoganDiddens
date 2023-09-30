<?php
require_once (dirname(__FILE__)."/../vendor/autoload.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function sendMail($from,$subject,$message){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "mail.loganportfoliotest.whf.bz";
    $mail->Port = "587";
    $mail->Username = "lucas@loganportfoliotest.whf.bz";
    $mail->Password = "@Logan123";
    $mail->CharSet = 'UTF-8';
    $mail->setFrom("lucas@loganportfoliotest.whf.bz", $from);
    $mail->isHTML(true);
    $mail->addAddress("logan.diddens@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail -> send();
}
?>