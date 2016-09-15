<?php

SESSION_START();

$usuario=$_SESSION['usuario'];
$idusuario=$_SESSION['idusuario'];

if ($usuario AND $idusuario){

	include "config.php";
	
    echo $idalumno=$_POST['idalumno'];
	echo$nombrea=$_POST['nombre'];
	echo $paternoa=$_POST['paterno'];
    echo $maternoa=$_POST['materno'];
	echo $secciona=$_POST['seccion'];
   $sexoa=$_POST['sexo'];
	
	$actualizar=mysql_query("UPDATE trabajador SET nombre='".$nombrea."',
	paterno='".$paternoa."',
	materno='".$maternoa."',
	ocupacion='".$secciona."',
	sexo='".$sexoa."' WHERE idalumno='".$idalumno."'", $conexion);
	
	if($actualizar){
		
		echo "<html>
	<head>
	<meta http-equiv='REFRESH' content='0 ; url=perfil.php'>
	<script>
	alert('Actualizacion exito');

	</script>
	</head>
	<html>";
	
	}else{
		
		echo "<html>
	<head>
	<meta http-equiv='REFRESH' content='0 ; url=perfil.php'>
	<script>
	alert('Error en el cambio');

	</script>
	</head>
	<html>";
	}
	
	}else{
		
		echo "<html>
	<head>
	<meta http-equiv='REFRESH' content='0 ; url=../index.php'>
	<script>
	alert('Inicia sesion');

	</script>
	</head>
	<html>";
	}
?>