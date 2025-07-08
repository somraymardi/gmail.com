<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'yourgmail@gmail.com'; // Your Gmail
    $mail->Password = 'yourapppassword';     // App Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($_POST['from_email']);
    $mail->addAddress($_POST['to_email']);
    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'];

    $mail->send();
    echo "Mail sent successfully!";
} catch (Exception $e) {
    echo "Error sending mail: {$mail->ErrorInfo}";
}
?>
