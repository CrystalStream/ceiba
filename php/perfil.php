<?php
SESSION_START();

$usuario=$_SESSION['usuario'];
$idusuario=$_SESSION['idusuario'];

if ($usuario AND $idusuario){

echo "<html>
	<head>
	<link rel='stylesheet' href='../css/perfil.css'>
	<meta charset='UTF-8'>
	</head>

	<body>
	<div class='hea'>
	<div class='rtn'>
	<strong>Hola: $usuario <a href='salir.php'>[x]</a></strong></div>
	<form class='buscar' method='POST' action='resultado.php'>
	<input type='text' name='buscar'>
	<input type='submit' class='btn' value='buscar'>
	</form></div>
	";
	
	include "config.php";
	
	$consulta=mysql_query("SELECT * FROM trabajador  ORDER BY apellidos ASC");
	
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
	
	echo"</table>";
	
	
echo "
<form action='insertar.php' class='alta' method='POST'>
</br>
<li>Ingreso de alumnos</li></br>
<label>Nombre:</label>
<input name='nombre' type='text'>
</br></br>
<label>Apellidos:</label>
<input name='apellidos' type='text'>
</br></br>
<label>Direccion:</label>
<input name='direccion' type='text'>
</br></br>
<label>Telefono:</label>
<input name='telefono' type='text'>
</br></br>
<label> Documento:</label>
<select name='doci' required>
<option value=''></option>
<option value='DPI'>DPI</option>
<option value='Fe de edad'>Fe de edad</option>
<input name='doci' type='text'>
</select>
</br></br>
<label>Modalidad:</label>
<input type='radio' name='moda' value='Flexible' required>Flexible
<input type='radio' name='moda' value='Cap. Tecnologica' required>Tecnologica
<input type='radio' name='moda' value='Ambas' required>Ambas
</br></br>
<label>Fecha de inscripcion:</label>
<input name='inscri' type='text' placeholder='2016-09-14'>
</br></br></br></br>
<label>Horas de Asistencia:</label>
<input name='asistencia' type='text' maxlength='5'>
</br></br></br></br>
<label>Beca:</label>
<input type='radio' name='beca' value='si' required>Si
<input type='radio' name='beca' value='no' required>No
</br></br></br></br>
<label>Seccion:</label>
<select name='seccion' required>
<option value=''></option>
<option value='A'>A</option>
<option value='B'>B</option>
<option value='B'>C</option>
<option value='D'>D</option>
</select>
</br>
</br>
<label>Sexo:</label>
<input type='radio' name='sexo' value='mujer' required>Mujer
<input type='radio' name='sexo' value='hombre' required>hombre
</br>
</br>
<input class='btn' type='submit' value='dar de alta'>

</form>
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