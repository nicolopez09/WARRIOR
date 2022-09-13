<?php
$bd_host = "localhost";
$bd_usuario = "user";
$bd_password = "password";
$bd_base = "nuestra_bd";

$con = mysql_connect($bd_host, $bd_usuario, $bd_password);
mysql_select_db($bd_base, $con);
?>
