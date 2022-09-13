<?php
require('configuracion.php');
$autor = $_POST["autor"];
$titulo = $_POST["titulo"];
$mensaje = $_POST["mensaje"];
$ident = $_POST["identificador"];

//Hacemos algunas validaciones
if(empty($autor)) $autor = "Anónimo";
if(empty($titulo)) $titulo = "Sin título";
//Evitamos que el usuario ingrese HTML
$mensaje = htmlentities($mensaje);

// Grabamos el mensaje en la base.
$sql = "INSERT INTO foro (autor, titulo, mensaje, identificador, fecha, ult_respuesta) ";
$sql.= "VALUES ('$autor','$titulo','$mensaje','$ident',NOW(),NOW())";
$rs = mysql_query($sql, $con) or die("Error al grabar un mensaje: ".mysql_error);
$ult_id = mysql_insert_id($con);

/* si es un mensaje en respuesta a otro
   actualizamos los datos */
if(!empty($ident))
{
    $sql = "UPDATE foro SET respuestas=respuestas+1, ult_respuesta=NOW()";
    $sql.= " WHERE id = '$ident'";
    $rs = mysql_query($sql, $con);
    Header("Location: foro.php?id=$ident#$ult_id");
    exit();
}
Header("Location: index.php");
?>
