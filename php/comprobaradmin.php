<?php
$nombre=$_POST['nombre'];
$contra=$_POST['contra'];

if($nombre AND $contra){
	
	include "config.php";
	
	$consulta=mysql_query("SELECT * FROM usuario WHERE nombre='".$nombre."' AND contra='".$contra."'");
	$filas=mysql_fetch_array($consulta);
	
	$nombrebd=$filas['nombre'];
	$contrabd=$filas['contra'];
	$idusuario=$filas['idusuario'];
	
	if($nombre==$nombrebd AND $contra==$contrabd)
	{
		
		SESSION_START();
		
		$_SESSION['usuario']=$nombrebd;
		$_SESSION['idusuario']=$idusuario;
		
		
		echo "<html>
	<head>
	<meta http-equiv='REFRESH' content='0 ; url=perfil.php'>
	<script>
	alert('Bienvenido $nombrebd');

	</script>
	</head>
	<html>";
	}
	else{
		echo "<html>
	<head>
	<meta http-equiv='REFRESH' content='0 ; url=../index.php'>
	<script>
	alert('Usuario no existente');

	</script>
	</head>
	<html>";
	}
	
}else{
	echo "<html>
	<head>
	<meta http-equiv='REFRESH' content='0 ; url=../index.php'>
	<script>
	alert('Llena el formulario');

	</script>
	</head>
	<html>";
}

?>