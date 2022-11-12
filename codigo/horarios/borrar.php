<?php

$id= $_POST['id'];
$nombreBADA = "id19615577_warrior";
$direccion = "localhost";


$link = mysqli_connect($direccion, "id19615577_root123", "Nq=h!9D>bAG@tQi4", $nombreBADA);
$query = "SELECT id_horario FROM horarios";
$resultado = mysqli_query($link, $query);
$count = mysqli_num_rows($resultado);
$borrar_usuario = "DELETE * from horarios where id_horario = '$id';";

$deletear_usuario = mysqli_query($link, $borrar_usuario);

if ($count == 1){
    
    $deletear_usuario;
    header("Location: https://warriorbootcampweb.000webhostapp.com/horarios/abmhorarios.html");

    }


else{
    echo "<h1><center>Ese numero de horario no existe</center></h1>";
}






 ?>