<?php

//se va a encargar de guardar un registro en una base de datos de todos aquellos visitantes
//que visiten mi web

//archivo donde se van a guardar lo9s log
$archivologs= "logs.dat";
//averiguar la ip de quien visita mi web y averiguar el navegador
@$ip = getenv(REMOTEADDR);
$navegador = $_SERVER["HTTP_USER_AGENT"];

//el contenido que quiero guardar

$contenido= date('U')."|".date("y"."|"."m"."|"."d"."|"."h"."|"."i"."|"."s")."|".$navegador."|".$ip."\n";

$manejador = fopen ($archivologs,'a+');
fwrite ($manejador,$contenido);


?>