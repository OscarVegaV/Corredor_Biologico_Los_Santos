<?php 
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$mail = $_POST['mail'];
	$tema = $_POST['tema'];
	$message = $_POST['message'];
    
	$header = 'From: ' . $mail . " \r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
	$header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

	$message = "Este mensaje fue enviado por: " . $name . " \r\n";
    $message .= "Su e-mail es: " . $mail . " \r\n";
    $message .= "tema: " . $tema . " \r\n";
    $message .= "mensaje: " . $_POST['message'] . " \r\n";
    $message .= "Enviado el: " . date('d/m/Y', time());

    $para = 'jordg60@gmail.com';
    $asunto = 'Mensaje de... (Escribe como quieres que se vea el remitente de tu correo)';

    mail($para, $asunto, utf8_decode($message), $header);
    
    echo "Correo enviado";

?>