<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];
$celular=$_POST['celular'];
$mensaje=$_POST['mensaje'];

$cuerpo= "Ha recibido un Mensaje de: $nombre
Datos enviados:
Email: $email
Telefono: $telefono
Celular: $celular
Ciudad: $ciudad
Mensajes: $mensaje";

if(mail('laury.abril.cruz@gmail.com', $nombre, $cuerpo)){

  echo "Su mensaje ha sido enviado";

}else{
  
  echo"su mensaje no pudo ser enviado";
}
