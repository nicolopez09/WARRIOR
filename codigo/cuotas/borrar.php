<?php

$id= $_POST['id'];
$nombreBADA = "id19615577_warrior";
$direccion = "localhost";


$link = mysqli_connect($direccion, "id19615577_root123", "Nq=h!9D>bAG@tQi4", $nombreBADA);
$query = "SELECT id_cuotas FROM cuotas";
$resultado = mysqli_query($link, $query);
$count = mysqli_num_rows($resultado);
$borrar_usuario = "DELETE * from cuotas where id_cuotas = '$id';";

$deletear_usuario = mysqli_query($link, $borrar_usuario);

if ($count == 1){
    
    $deletear_usuario;
    header("Location: https://warriorbootcampweb.000webhostapp.com/cuotas/abmcuotas.html");

    }


else{
    echo "<h1><center>Ese numero de cuota no existe</center></h1>";
}






 ?>