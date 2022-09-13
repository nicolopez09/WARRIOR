<?php
require('configuracion.php');
require('funciones.php');
include('header.html');
/* Pedimos todos los temas iniciales (identificador==0)
* y los ordenamos por ult_respuesta */
$sql = "SELECT id, autor, titulo, fecha, respuestas, ult_respuesta ";
$sql.= "FROM foro WHERE identificador=0 ORDER BY ult_respuesta DESC";
$rs = mysql_query($sql, $con);
if(mysql_num_rows($rs)>0)
{
    // Leemos el contenido de la plantilla de temas
    $template = implode("", file("temas.html"));
    include('titulos.html');
    while($row = mysql_fetch_assoc($rs))
    {
        $color=($color==""?"#5b69a6":"");
        $row["color"] = $color;
        mostrarTemplate($template, $row);
    }
}
include('footer.html');
?>
