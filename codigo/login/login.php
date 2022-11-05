<?php

$usuario= $_POST['usuario'];

$contrasenia= $_POST['contrasenia'];

$nombreBADA = "id19615577_warrior";

$direccion = "localhost";

$link = mysqli_connect($direccion, "id19615577_root123", "Nq=h!9D>bAG@tQi4", $nombreBADA);

$query = "SELECT * FROM Usuario where Nombre_Usuario = '$usuario' and Contraseña = '$contrasenia';";

$resultado = mysqli_query($link, $query);

$count = mysqli_num_rows($resultado);



if ($count == 1){
    
    header("Location: https://warriorbootcampweb.000webhostapp.com/principal/principal.html");
    if($usuario == "root" and $contrasenia == "Admin123"){
        header("Location: https://warriorbootcampweb.000webhostapp.com/principal/abmprincipal.html");

    }
}

else{
    echo "<h1><center>Usuario o contraseña incorrectos</center></h1>";
}

 ?>
