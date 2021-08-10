<?php

include("../global/conexion.php");
include("../php/login.php");
include("../global/sesiones.php");
require 'src/PHPMailer.php';
require 'src/SMTP.php';



$email = $_POST['editemail'];
$hash = md5( rand(0,1000) );
$id = $_SESSION['usuarioid'];

$consulta = $conect->prepare("UPDATE walkartregister SET hash_='$hash' WHERE id='$id'");      
$consulta->bindParam(':hash_',$hash);
$consulta->execute();
        
$mail=new PHPMailer();
$mail->CharSet = 'UTF-8';

$body = '

You are only one step away from being able to verify your account

please click on the link below to validate your email directly

http://merakibylu.co/merakibylu.co/walkart/ajax/phpprofile/finalsteph.php?email='.$email.'&hash='.$hash.'


';

$mail->IsSMTP();
$mail->Host       = 'mail.merakibylu.co';
$mail->SMTPSecure = 'ssl';
$mail->Port       = 465;
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = true;
$mail->Username   = 'walkart@merakibylu.co';
$mail->Password   = '987654321Walkart1';
$mail->SetFrom('walkart@merakibylu.co', "Walkart");
$mail->AddReplyTo('customerservicewalkart@gmail.com','help service');
$mail->Subject    = 'Verify your email';
$mail->MsgHTML($body);

$mail->AddAddress($email, 'Walkart');
$mail->send();
$send = $mail->send();
if($send){
        echo "si";
    }else{
        echo $mail->ErrorInfo;
    }

?>