<html>
<head>

<link rel="stylesheet" href="css/estilo.css">
<meta charset="UTF-8">


</head>

<body>
<!-- Este Formulario es de registro
<form id="registro" action="php/recibir.php" method="POST">
<li>Registro</li></br>
<label>Nombre:</label>
<input name="nombre" type="text">
</br></br>
<label>Paterno:</label>
<input name="paterno" type="text">
</br></br>
<label>Usuario:</label>
<input name="usuario" type="text">
</br></br>
<label>Contraseña:</label>
<input name="contra" type="password">
</br></br>
<input type="submit" class='btn' value="Registrar">
</form>
-->

<form id="login" method='POST' action='php/comprobaradmin.php'>

<div class="log">Login</div></br>

<input name="nombre" placeholder="Nombre">
<br />
<input type="password" name="contra" placeholder="Contraseña">
<br />
<input type="submit" class='btn' value="Entrar">
</form>

</body>

</html>