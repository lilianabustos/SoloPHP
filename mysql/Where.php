<?php

	$conexion = mysql_connect("localhost","liliana","liliana");

	if (!$conexion) {
		die(mysql_error());
	}

	mysql_select_db("agenda", $conexion);

	$peticion = mysql_query("SELECT * FROM miagenda WHERE Nombre = 'liliana'");

	while ($fila = mysql_fetch_array($peticion)) {
		echo $fila['Nombre']." ".$fila['Apellido'];

		echo "<br>";

	}

	mysql_close($conexion);


?>