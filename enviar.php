<?php
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$provincia = $_POST['provincia'];
$codigopostal = $_POST['codigo-postal'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
​
$mensaje = "Este mensaje fue enviado por " . $email . ",\r\n";
$mensaje .= "Su Direccion es: " . $direccion . " \r\n";
$mensaje .= "Su Ciudad es: " . $ciudad . " \r\n";
$mensaje .= "Su Provincia es: " . $provincia . " \r\n";
$mensaje .= "Su Codigo Postal es: " . $codigopostal . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'liiddonline@gmail.com'; 
$asunto = 'Contactos de mi sitio web';
​
mail($para, $asunto, utf8_decode($mensaje), $header);
​
header("Location:index.html");

?>