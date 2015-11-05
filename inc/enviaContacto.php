<?php
// enviaContacto.php
// Este script procesa la petecion de enviar a la base de datos los datos recolectados en el formulario de contacto.php

// Recuperar el valor de los campos del formulario
$nombre     = $_POST['txtNombre'];
$mail       = $_POST['txtMail'];
$telefono   = $_POST['txtTelefono'];
$categoria  = $_POST['sltCategorias'];
$comentarios    = $_POST['txaMensaje'];

//Requerir el archivo de conexion al servidor
require_once('cxnServidor.php');

//Selecionar la BD
mysql_select_db("genesis", $cxnServidor);

// Estabkecer consulta de insercion
$sql = "INSERT INTO comentarios
    VALUES(
        '',
        '$nombre',
        '$mail',
        '$telefono',
        '$categoria',
        '$comentarios'
    )
";

// Ejecutar consulta
$resultado = mysql_query($sql, $cxnServidor);

// Cerrar conexion
mysql_close($cxnServidor);

echo '
<html>
    <head>
        <meta http-equiv="REFRESH" content="0,url=../contacto.php">
    </head>
</html>
';

 ?>
