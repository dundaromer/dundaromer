<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include('C:/xampp/htdocs/Güncellemeler/inc/config.php');

    if($_POST){
        $gelen_mail = $_POST["mail"];
        $gelen_text = $_POST["text"];

        DB::insert("INSERT INTO iletisimdekiler(gelen_mail,gelen_text) VALUES(?,?)",array(
            $gelen_mail,
            $gelen_text,
        ));

        require '../phpmailer/src/Exception.php';
        require '../phpmailer/src/PHPMailer.php';
        require '../phpmailer/src/SMTP.php';

        $mail = new PHPMailer(true);
        $mail-> isSMTP();
        $mail-> SMTPAuth = true;
        $mail->SMTPSecure = 'tls';//ssl de olabilir
        $mail->Port = 587;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'omerdundar2011@gmail.com';
        $mail->Password = 'taoylqfqvbpjglef';
        $mail->addAddress('omerdundar2011@gmail.com');
        $mail->Subject = $gelen_mail;
        $mail->Body ='Mail Adresi : '.$gelen_mail.' '. 'İçerik : '.$gelen_text;
        if($mail->Send()){
            echo 'Mail Gönderildi';
        }else{
            echo 'Mail Gönderilemedi';
        };


        header("Location: ../index.php?success=1#İletişim");
    }
    
?>