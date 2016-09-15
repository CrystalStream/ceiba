<?php

$conexion=mysql_connect("localhost","root","") or die ("No existe conexion");

$bd=mysql_select_db("ceiba2", $conexion) or die ("No existe la base de datos");

?>