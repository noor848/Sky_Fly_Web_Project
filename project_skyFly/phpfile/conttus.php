<?php
require('../include/connect.php');
require_once('../PHPMailer/PHPMailerAutoload.php');
session_start();



$mail=new PHPMailer();


	$mail->isSMTP();  
	$mail->SMTPAuth=true;
	$mail->SMTPSecure = 'ssl'; 
	
	$mail->Host = 'smtp.gmail.com';     
	
	$mail->Port= '465';
	$mail->isHTML();


    $mail->Username   = 'sky.flydirector@gmail.com';                     // SMTP username
    $mail->Password   = 'skyfly123';                              
	$mail->setFrom($_SESSION['email']);
	
	$mail->Subject ='Message';


	$mail->Body ="Thanks for Your message We will Contact you Soon <br>";


echo $_SESSION['email'];

    $mail->AddAddress($_SESSION['email']);     // Add a recipient
	$mail->send();
	


// header("refresh:1;../index");
?>