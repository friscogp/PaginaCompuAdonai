<?php
$para       = 'horaciogomezulloque@gmail.com';
$titulo     = 'Solicitud de Servicio';
	
$identificacion = htmlspecialchars($_POST['identificacion']);
$nombre = htmlspecialchars($_POST['nombre']);
$direccion = htmlspecialchars($_POST['direccion']);
$telefono = htmlspecialchars($_POST['telefono']);
$correo = htmlspecialchars($_POST['correo']);
$mensaje = htmlspecialchars($_POST['mensaje']);

$mensaje    = 'Identificacion: ' . $identificacion . "\r\n" . 'Nombre: ' . $nombre . "\r\n" . 'Direccion: ' . $direccion . "\r\n" . 'Telefono: ' . $telefono . "\r\n" . 'Correo: ' . $correo . "\r\n" . 'Mensaje: ' . $mensaje . "\r\n" . htmlspecialchars($_POST['mensaje']);

mail($para, $titulo, $mensaje);
header('Location: index.php');
?> 	