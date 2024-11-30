<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$mail = new PHPMailer(exceptions: true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'syedahmed7421@gmail.com'; 
    $mail->Password = 'dgim slhk zchj djoj'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465; 


    $mail->setFrom('syedahmed7421@gmail.com', ' Contact Form'); 
    $mail->addAddress('syedahmed7421@gmail.com'); 
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'New Project Inquiry';
    $mail->Body = "
        <h3>Project Inquiry</h3>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Message:</strong> $message</p>

  
    ";

    $mail->send();
    header("Location: contact.php");

    exit();
} catch (Exception $e) {
    header("Location: contact.php?error=" . urlencode($mail->ErrorInfo));
    exit();}
?>
