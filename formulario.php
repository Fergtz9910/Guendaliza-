<?php 

$para ='correo@gmail.com';
$asunto = "Guendaliza";

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$numero = $_POST['numero'];


$mensaje ="Hola mi nombre es ".$nombre." ".$apellidos." mi correo es ".$email." y mi numero telefonico es ".$numero. " me gustaria contribuir a la fundacion";

echo $mensaje;
//$enviarMail = mail ($para, $asunto, $mensaje);

?>