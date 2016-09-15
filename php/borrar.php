<?php
SESSION_START();

$usuario=$_SESSION['usuario'];
$idusuario=$_SESSION['idusuario'];

if ($usuario AND $idusuario){
	
	include "config.php";
	
    $idalumnot=$_GET['id'];
	
	$borrar=mysql_query("DELETE FROM trabajador WHERE idalumno='".$idalumnot."'", $conexion);
	
	if($borrar){
		echo "<html>
	<head>
		<meta http-equiv='REFRESH' content='0 ; url=perfil.php'>
		<script>
		alert('Borrado con exito');
		</script>
	</head>


	</html>";
	
}else{
		echo "<html>
	<head>
		<meta http-equiv='REFRESH' content='0 ; url=perfil.php'>
		<script>
		aler ('Fallo el borrado');
		</script>
	</head>

	</html>";
}

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