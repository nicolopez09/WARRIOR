<?php

$usuario= $_GET['usuario'];
$contrasenia= $_GET['contrasenia'];
$nombreBADA = "id19615577_warrior";
$direccion = "localhost";


$link = mysqli_connect($direccion, "id19615577_root123", "Nq=h!9D>bAG@tQi4", $nombreBADA);
$query = "SELECT * FROM Usuario where usuario = '$usuario';";
$resultado = mysqli_query($link, $query);
$count = mysqli_num_rows($resultado);
$nuevo_usuario = "INSERT INTO Usuario (usuario, contrasenia) VALUES( '$usuario', '$contrasenia');";
$cargar_usuario = mysqli_query($link, $nuevo_usuario);

if ($count == 1){
    
    echo "<h1><center>El usuario ya existe</center></h1>";

    }


else{
    $cargar_usuario;
    header("Location: https://warriorbootcampweb.000webhostapp.com/login/loginab.html");

}






 ?>
