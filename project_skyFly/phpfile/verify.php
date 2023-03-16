<?php
require_once('PHPMailer/PHPMailerAutoload.php');
$mail=new PHPMailer();


	$mail->isSMTP();  
	$mail->SMTPAuth=true;
	$mail->SMTPSecure = 'ssl'; 
	
	$mail->Host = 'smtp.gmail.com';     
	
	$mail->Port= '465';
	$mail->isHTML();


    $mail->Username   = 'sky.flydirector@gmail.com';                     // SMTP username
    $mail->Password   = 'skyfly123';                              
	$mail->setFrom("$email");
	
	$mail->Subject ='Message';

   $randnum=rand(155586,545445);
	$mail->Body ="Verify Code is:"."$randnum";

    $mail->AddAddress($email);     // Add a recipient
    $mail->send();
