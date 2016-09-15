<?php 

SESSION_START();

$usuario=$_SESSION['usuario'];
$idusuario=$_SESSION['idusuario'];

if ($usuario AND $idusuario){
	include "conFig.php";
	$idalumno=rand(1,900000);
	$nombre=$_POST['nombre'];
    $paterno=$_POST['apellidos'];
	$materno=$_POST['direccion'];
	$telefonoa=$_POST['telefono'];
	$doca=$_POST['doci'];
	$modaa=$_POST['moda'];
	$inscria=$_POST['inscri'];
	$asistenciaa=$_POST['asistencia'];
	$seccion=$_POST['seccion'];
	$becaa=$_POST['beca'];
	$sexo=$_POST['sexo'];
	
	$insertar=mysql_query("INSERT INTO trabajador VALUE('".$idalumno."',
	'".$nombre."',
	'".$paterno."',
	'".$materno."',
	'".$seccion."',
	'".$telefonoa."',
	'".$doca."',
	'".$modaa."',
	'".$inscria."',
	'".$asistenciaa."',
	'".$becaa."',
	'".$sexo."'
	)", $conexion);
	
	
	if($insertar)
	{
		echo "<html>
	<head>
	<meta http-equiv='REFRESH' content='0 ; url=perfil.php'>
	<script>
	alert('Insertado con exito');

	</script>
	</head>
	<html>";
	}else{
		echo "<html>
	<head>
	<meta http-equiv='REFRESH' content='0 ; url=../index.php'>
	<script>
	alert('Insertado fallido');

	</script>
	</head>
	<html>";
	}
	}else
	{
		echo "No has iniciado sesion";
	}
		
	
?>