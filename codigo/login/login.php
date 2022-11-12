<?php

$usuario= $_POST['usuario'];

$contrasenia= $_POST['contrasenia'];

$nombreBADA = "id19746717_warriorwebdb";

$direccion = "localhost";

$link = mysqli_connect($direccion, "id19746717_warriorroot", "s=<^z4m)_ow42Ye!", $nombreBADA);

$query = "SELECT * FROM Usuario where Nombre_Usuario = '$usuario' and contrasenia = '$contrasenia';";

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
