<?php
SESSION_START();

SESSION_DESTROY();

echo "<html>
	<head>
	<meta http-equiv='REFRESH' content='0 ; url=../'>
	<script>
	alert('Gracias por usar el sistema');

	</script>
	</head>
	<html>";
?>