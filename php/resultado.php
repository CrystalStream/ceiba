<?php
SESSION_START();

$usuario=$_SESSION['usuario'];
$idusuario=$_SESSION['idusuario'];

if ($usuario AND $idusuario){

$trabajador=$_POST['buscar'];
echo "<html>
	<head>
	<meta charset='UTF-8'>
	</head>

	<body>
	<strong>Hola: $usuario <a href='salir.php'>[x]</a></strong>
	<a href='perfil.php'>Regresar</a>
	<form action='insertar.php' method='POST'>
	</br>";
	
	include "config.php";
	
	$consulta=mysql_query("SELECT * FROM trabajador WHERE nombre like '%$trabajador%' OR apellidos like '%$trabajador%' OR doc like '%$trabajador%'");
	
	echo "<table border='1px'>
	<tr>
	<th>Nombre</th>
	<th>Apellidos</th>
	<th>Genero</th>
	<th>Direccion</th>
	<th>Seccion</th>
	<th>Telefono</th>
	<th>Documento</th>
	<th>Modalidad</th>
	<th>Fecha</th>
	<th>Asistencia</th>
    <th>Beca</th>
	<th>Eliminar</th>
	<th>Modificar</th>
	</tr>";
	while($filas=mysql_fetch_array($consulta))
	{
         $idalumno=$filas['idalumno'];
			$nombrea=$filas['nombre'];
			$paternoa=$filas['apellidos'];
			$maternoa=$filas['direccion'];
			$secciona=$filas['seccion'];
			$telefono=$filas['telefono'];
			$doc=$filas['doc'];
			$modaa=$filas['moda'];
			$inscria=$filas['inscri'];
			$asistenciaa=$filas['asistencia'];
			$becaa=$filas['beca'];
			$sexoa=$filas['sexo'];
			
			echo "
			<tr>
			<td>$nombrea</td>
			<td>$paternoa</td>
			<td>$sexoa</td>
			<td>$maternoa</td>
			<td>$secciona</td>
			<td>$telefono</td>
			<td>$doc</td>
			<td>$modaa</td>
			<td>$inscria</td>
			<td>$asistenciaa/h</td>
			<td>$becaa</td>
			<th><a href='borrar.php?id=$idalumno'>Borrar</a></th>
			<th><a href='cambiar.php?idalumno=$idalumno&nombrea=$nombrea&paternoa=$paternoa&maternoa=$maternoa&secciona=$secciona&sexoa=$sexoa'>editar</a></th>
			</tr>
			";
	}
	
	echo"</table>
	
	</body>
	<html>";

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