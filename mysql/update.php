<?php


		$conexion = mysql_connect("localhost","liliana","liliana");


	    mysql_select_db("agenda", $conexion);

	    $peticion = mysql_query("UPDATE  miagenda SET Edad = '23' WHERE Nombre = 'Liliana' AND Apellido = 'Bustos'");

	    mysql_close($conexion);



?>
