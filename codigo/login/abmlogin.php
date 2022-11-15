<?php

$usuario= $_GET['usuario'];

$contrasenia= $_GET['contrasenia'];

$nombreBADA = "id19615577_warrior";

$direccion = "localhost";

$link = mysqli_connect($direccion, "id19615577_root123", "Nq=h!9D>bAG@tQi4", $nombreBADA);

$query = "SELECT * FROM Usuario where usuario = '$usuario' and contrasenia = '$contrasenia';";

$resultado = mysqli_query($link, $query);

$count = mysqli_num_rows($resultado);



if ($count == 1){
    
    echo "<h1><center>usuario ya existente</center></h1>";

    }


else{
    
}

 ?>
