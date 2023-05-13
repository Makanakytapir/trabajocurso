<?php

if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nombre=$_POST['nombre']; 
    $apellido=$_POST['apellidos'];
    $telefono=$_POST['telefono']; 
    $email=$_POST['email']; 



$destinatario='gerardojos31@gmail.com';


$cuerpo="Nombre: ".$nombre."\n";
$cuerpo.= "Apellido: ".$apellido."\n";
$cuerpo.="Telefono: ".$telefono."\n";
$cuerpo.= "Email: ".$email."\n";


$asunto='cliente sitio web';


if(mail($destinatario, $asunto, $cuerpo)){
    echo "El Mensaje se envio exitosamente";

}else{
    echo "Hubo un error al enviar el mensaje, intentelo de nuevo.";
}
    
}
?>