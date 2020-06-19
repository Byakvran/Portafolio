<?php

$name = $_POST['nombre'];
$empresa = $_POST['empresa'];
$phone = $_POST['telefono'];
$correo = $_POST['correo'];
$message = $_POST['mensaje'];

$formcontent="Acabas de recibir un mensaje de: $name \n
empresa: $empresa \n
telefono: $pnone \n
correo: $correo \n
mensaje: $message";

$recipient = "byakkvran@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $correo \n ";

mail($recipient,$subject,$formcontent,$mailheader) or die ("Error!");
?>