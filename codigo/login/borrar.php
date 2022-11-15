<?php

$usuario= $_GET['usuario'];
$nombreBADA = "id19615577_warrior";
$direccion = "localhost";


$link = mysqli_connect($direccion, "id19615577_root123", "Nq=h!9D>bAG@tQi4", $nombreBADA);
$query = "SELECT * FROM Usuario where usuario = '$usuario';";
$resultado = mysqli_query($link, $query);
$count = mysqli_num_rows($resultado);
$borrar_usuario = "DELETE * from Usuario where usuario = '$usuario';";

$deletear_usuario = mysqli_query($enlace, $borrar_usuario);

if ($count == 1){
    
    $deletear_usuario;
    header("Location: http://warriorweb.infinityfreeapp.com/login/loginab.html");

    }


else{
    echo "<h1><center>usuario no existe</center></h1>";
}






 ?>