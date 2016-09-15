<?php
$usuario=$_SESSION['usuario'];
$idusuario=$_SESSION['idusuario'];

if ($usuario AND $idusuario){
	
include "php/config.php";
	
	$consulta=mysql_query("SELECT * FROM trabajador  ORDER BY paterno ASC");
	
	echo "<table border='1px'>
	<tr>
	<th>Nombre</th>
	<th>Paterno</th>
	<th>Materno</th>
	<th>Seccion</th>
	<th>Sexo</th>
	<th>Eliminar</th>
	<th>Modificar</th>
	</tr>";
	while($filas=mysql_fetch_array($consulta))
	{
            $idalumno=$filas['idalumno'];
			$nombrea=$filas['nombre'];
			$paternoa=$filas['paterno'];
			$maternoa=$filas['materno'];
			$secciona=$filas['seccion'];
			$sexoa=$filas['sexo'];
			
			echo "
			<tr>
			<td>$nombrea</td>
			<td>$paternoa</td>
			<td>$maternoa</td>
			<td>$secciona</td>
			<td>$sexoa</td>
			<th><a href='borrar.php?id=$idalumno'>Borrar</a></th>
			<th><a href='cambiar.php?idalumno=$idalumno&nombrea=$nombrea&paternoa=$paternoa&maternoa=$maternoa&secciona=$secciona&sexoa=$sexoa'>editar</a></th>
			</tr>
			";
	}
	
	echo"</table>";
	}else{
		
			echo "<html>
	<head>
	<meta http-equiv='REFRESH' content='0 ; url=../index.html'>
	<script>
	alert('Inicia sesion');

	</script>
	</head>
	<html>";
	
	}
	?>