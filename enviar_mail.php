<?php
 
 
$identificacion = $_POST['identificacion'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje=$_POST['mensaje'];
$destinatario='horaciogomezulloque@gmail.com';
$mensajet=$nombre." ". $direccion." ".$telefono." ".$correo;
mail($destinatario,"solicitud servicio tecnico",$mensajet);
header('Location:mensaje-de-envio.html') 

?>