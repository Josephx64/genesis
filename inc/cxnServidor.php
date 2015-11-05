<?php
// Archivo de conexion al servidor

//Datos de la conexion
$host = "localhost";
$usr = "cetecnet_jl";
$pass = "contram_jl1@cetecnet";
$db = "cetecnet_mitienda";


// Establecer la conexion
$cxnServidor = mysql_connect($host, $usr, $pass) or die (mysql_error());

//Selecionar la BD
mysql_select_db($db, $cxnServidor);

/*
// Establecer consulta
$consulta = "SELECT * FROM general";
// Ejecutar  la consulta
$resultado = mysql_query($cxnCiudades,$consulta);
// Verificar recuperacon de la consulta
if (!resultado) {
  die("No s pudo realizar la consulta: ".mysql_error());
}

// Cerrar la conexion
mysql_close($cxnGenesis);

*/

?>
