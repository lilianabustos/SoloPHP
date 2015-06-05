<?php

		$conexion = mysql_connect("localhost","liliana","liliana");


	    mysql_select_db("agenda", $conexion);

	    $peticion = mysql_query("DELETE FROM miagenda  WHERE Nombre = 'Liliana' AND Apellido = 'Bustos'");

	    mysql_close($conexion);



?>