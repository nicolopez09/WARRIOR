<?php

$id= $_POST['id'];
$nombreBADA = "id19615577_warrior";
$direccion = "localhost";


$link = mysqli_connect($direccion, "id19615577_root123", "Nq=h!9D>bAG@tQi4", $nombreBADA);
$query = "SELECT id_contactos FROM contactos";
$resultado = mysqli_query($link, $query);
$count = mysqli_num_rows($resultado);
$borrar_usuario = "DELETE * from contactos where id_contactos = '$id';";

$deletear_usuario = mysqli_query($enlace, $borrar_usuario);

if ($count == 1){
    
    $deletear_usuario;
    header("Location: http://warriorweb.infinityfreeapp.com/contactos/abmcontactos.html");

    }


else{
    echo "<h1><center>Ese numero de contacto no existe</center></h1>";
}






 ?>