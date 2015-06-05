<?php
//se guardan temporalmente
session_start();

$primvar="hola";
$_SESSION['segunvar']="Adios";

echo $primvar;
echo "<a href='destino.php'>Voy al destino</a>";

?>