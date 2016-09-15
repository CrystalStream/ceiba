<?php
SESSION_START();

$usuario=$_SESSION['usuario'];
$idusuario=$_SESSION['idusuario'];

if ($usuario AND $idusuario){
	
	$idalumno=$_GET['idalumno'];
	$nombrea=$_GET['nombrea'];
	$paternoa=$_GET['paternoa'];
    $maternoa=$_GET['maternoa'];
	$secciona=$_GET['secciona'];
	$sexoa=$_GET['sexoa'];
	
	echo "<html>
	<head>
	<meta charset='UTF-8'>
	</head>

	<body>
<form action='comprobar.php' method='POST'>
<input type='hidden' name='idalumno' value='$idalumno'>
</br></br>
<label>Nombre:</label>
<input name='nombre' value='$nombrea'>
</br></br>
<label>paterno:</label>
<input name='paterno' value='$paternoa'>
</br></br>
<label>Materno:</label>
<input name='materno' value='$maternoa'>
</br></br>
<label>Seccion:</label>
<select name='seccion' value='$secciona' required>
<option value=''></option>
<option value='A'>A</option>
<option value='B'>B</option>
<option value='B'>C</option>
<option value='D'>D</option>
</select>
</br></br>
<label>Sexo:</label>
<input name='sexo' value='$sexoa'>
</br></br>
<input type='submit' value='Cambiar'>
</form>
		</body>
	</br>
		</html>";
}else{
	
	echo "<html>
	<head>
	<meta charset='UTF-8'>
	</head>

	<body>
	<strong>Hola: $usuario <a href='salir.php'>[x]</a></strong>
	<form action='insertar.php' method='POST'>
	</br>";
	
}
?>