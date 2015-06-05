<?php

$conexion= mysql_connect("localhost","liliana","liliana");
if(!$conexion){
	
	die('no he podido conectar:'.mysql_error());


}
//$var=1;
//crear la base de datos
/*
if(mysql_query("CREATE DATABASE agenda",$conexion)){
echo "Se ha creado la base de datos";
}else{
	echo"No se ha podido crear la base de datos por el siguiente error:".mysql_error();
}
*/

//preparo esta peticion
mysql_select_db("agenda",$conexion);
$sql="CREATE TABLE miagenda(
personaID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(personaID),
Nombre varchar(15),
Apellido varchar(15),
Edad int,
Telefono int )";

//ejecuto la peticion
mysql_query($sql,$conexion);

mysql_close($conexion);


?>
