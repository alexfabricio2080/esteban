<?php
$nombre = $_POST['nombre'];
$opcion = $_POST['inlineRadioOptions'];
$Fecha = $_POST['fecha'];
$mail = $_POST['correo'];
$telefono = $_POST['tel'];
$empresa = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje = "1: Partido, 2: Entrenamiento: " . $opcion . ",\r\n";
$mensaje = "Fecha del partido o el entrenamiento: " . $Fecha . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su teléfono es: " . $telefono . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'alexfabricio2080@gmail.com';
$asunto = 'Solicitud de información';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>