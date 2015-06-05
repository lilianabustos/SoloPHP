<?php

	//Realizamos la conexion
	$conexion = mysql_connect("localhost","liliana","liliana");

	//Estructura de control por si falla:
	if (!$conexion) {
		die("No se a podido conectar porque: ".mysql_error());
	}

	// Seleccion de base de datos.
	mysql_select_db("agenda", $conexion);

	//realizo la peticion.
	$peticion = mysql_query("SELECT * FROM miagenda");

	//listo los elementos de la base de datos.
	while ($fila = mysql_fetch_array($peticion)) {
		
		echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];
		echo "<br>";
	}

	//Cerrar  conexion
	mysql_close($conexion);
	

?>