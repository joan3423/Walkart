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

http://localhost/ajax/phpprofile/finalsteph.php?email='.$email.'&hash='.$hash.'


';

$mail->IsSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = true;
$mail->Username   = 'customerservicewalkart@gmail.com';
$mail->Password   = '1001049809';
$mail->SetFrom('customerservicewalkart@gmail.com', "Walkart");
$mail->AddReplyTo('customerservicewalkart@gmail.com','help service');
$mail->Subject    = 'Verify your email';
$mail->MsgHTML($body);

$mail->AddAddress($email, 'Walkart');
$mail->send();

?>