<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_cxnServidor = "localhost";
$database_cxnServidor = "genesis";
$username_cxnServidor = "root";
$password_cxnServidor = "contram";
$cxnServidor = mysql_pconnect($hostname_cxnServidor, $username_cxnServidor, $password_cxnServidor) or trigger_error(mysql_error(),E_USER_ERROR); 
?>