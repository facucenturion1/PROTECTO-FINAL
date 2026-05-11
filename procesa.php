<?php
$email=$_POST["email"];
$contraseña=$_POST["contraseña"];

$mail="hola@gmail.com";
$contra="123";
if ($email== $mail && $contra==$contraseña ) {
header("Location: principal.html" );
exit();

} else{
    
    header("Location: login.html" );

}






?>