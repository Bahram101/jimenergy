<?php
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';



if(isset($_POST['callMe'])){   
    $name = trim($_POST['userName']);
    $phone = trim($_POST['phoneNumber']);
    
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host       = 'smtp.mail.ru';		
        $mail->SMTPAuth   = true;        
        $mail->Username   = 'bahram101@mail.ru';
        $mail->Password   = '';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('bahram101@mail.ru', $name);
        $mail->addAddress('bahram101@mail.ru');
        $mail->isHTML(true);		
        $mail->Subject = 'Звоните мне';
        $mail->CharSet = 'UTF-8';
        $mail->MsgHTML(
            "<strong>Звоните мне</strong><br><br>
            <strong>Имя:</strong> ".$name.",<br>
            <strong>Телефон:</strong>".$phone);
        $mail->send();   
        header('Location: thankyou.html');
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
 
}else{    
    $name = trim($_POST['userName']);
    $phone = trim($_POST['phoneNumber']);
    $message = trim($_POST['message']);
    
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host       = 'smtp.mail.ru';		
        $mail->SMTPAuth   = true;        
        $mail->Username   = 'bahram101@mail.ru';
        $mail->Password   = '';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('bahram101@mail.ru', $name);
        $mail->addAddress('bahram101@mail.ru');
        $mail->isHTML(true);		
        $mail->Subject = 'Сообщение';
        $mail->CharSet = 'UTF-8';
        $mail->MsgHTML(
            "Имя: ".$name."<br>
            Номер: ".$phone."<br>
            Сообщение: ".$message);
        $mail->send();   
        header('Location: message.html');
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
ob_end_flush();
}



