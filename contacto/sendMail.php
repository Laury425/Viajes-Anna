<?php
$nombre=$POST['nombre'];
$email=$POST['email'];
$telefono=$POST['telefono'];
$ciudad=$POST['ciudad'];
$celular=$POST['celular'];
$mensaje=$POST['mensaje'];

$cuerpo= "Ha recibido un Mensaje de: $nombre
Datos Enviados:
Email. $email
Telefono: $telefono
Celular: $celular
Ciudad: $ciudad
Mensajes: $mensaje";

if(mail('laury.abril.cruz@gmail.com', $nombre, $cuerpo)){
 echo "Su mensaje ha sido enviado";
}else{
echo"Su mensaje ha sido enviado";
}
