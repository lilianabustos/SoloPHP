<?php


$archivo = "text.txt";
$contenido = "Este es otro contenido ";

//fwrite escribe informacion dentro de un archivo
//tiene un manejador y un contenido
//fopen abrira el archivo fwrite escribira en el archivo

//$manejador= fopen($archivo, 'a+');
$manejador= fopen($archivo, 'w+');
fwrite($manejador,$contenido)
?>