<?php
SESSION_START();

$nom=$_SESSION['nombre'];
$ape=$_SESSION['apellido'];

echo "Variable de sesion: </br>";

echo "El nombre es:$nom </br> El Apellido es: $ape";

echo"<a href='pag4.php'>cerrar sesion</a>";
?>