<?php
//volver a colocar la conexion
$conexion = mysql_connect("localhost","liliana","liliana");

mysql_select_db("agenda",$conexion);

mysql_query("INSERT INTO miagenda(Nombre, Apellido, Edad, Telefono) VALUES('Liliana','Bustos',26,'315303994')");

mysql_query("INSERT INTO miagenda(Nombre, Apellido, Edad, Telefono) VALUES('David','Niño',28,'3153016994')");

// mysql_query("INSERT INTO miagenda(personaID, Nombre, Apellido, Edad, Telefono) VALUES(2,'Saori','Niño',07,3154567994)");

mysql_close($conexion);

?>