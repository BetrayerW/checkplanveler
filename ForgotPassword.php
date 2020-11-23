<?php
    use \vendor\phpmailer\phpmailer\src\PHPMailer;
    use \vendor\phpmailer\phpmailer\src\Exception;



    require_once 'vendor/autoload.php';

    $mail = new PHPMailer(true);
try{

    $mail->SMTPDebug =2;
    $mail->isSTMP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'planveler@gmail.com';
    $mail->Password = 'planveler1234';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('planveler@gmail.com','Planveler Team');
    $mail->addAddress('0904283767.aa@gmail.com');
    $mail->addReplyTo('0904283767.aa@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'My first Gmail SMTP email';
    $mail->Body = 'Hi! <b>Thank you!</b>';

    $mail->send();
    echo 'Message has been sent!';
} catch(Exception $e){
    echo 'Message could not be sent. Error: ', $mail->ErrorInfo;
}

?>