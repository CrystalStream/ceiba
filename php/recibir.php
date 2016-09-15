<?php
$id=rand(1, 9999999);
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];

if($nombre AND $paterno AND $usuario AND $contra)
{
include "config.php";


$insertar=mysql_query("INSERT INTO usuario VALUES('".$id."', 
 '".$nombre."',
 '".$paterno."',
 '".$usuario."',
 '".$contra."')",$conexion);

if ($insertar)
{
	echo "<html>
	<head>
	<meta http-equiv='REFRESH' content='0 ; url=../index.php'>
	<script>
	alert('Gracias por tu registro');

	</script>
	</head>
	<html>";
	
}else{
	
	echo "<html>
	<head>
	<meta http-equiv='REFRESH' content='0 ; url=../index.php'>
	<script>
	alert('Ha fallado tu registro');

	</script>
	</head>
	<html>";
}
}
else{
	
	echo "<html>
	<head>
	<meta http-equiv='REFRESH' content='0 ; url=../index.php'>
	<script>
	alert('Llena el formulario');

	</script>
	</head>
	<html>";
	}

//echo "Tu nombre es".$nombre;

//echo "</br>Paterno:".$paterno;

//echo "</br>Tu usuario es:".$usuario;

//echo "</br>Tu nombre es".$contra;
?>