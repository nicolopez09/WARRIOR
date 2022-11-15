<?php

$imagen= $_POST['foto'];
$nombreBADA = "id19615577_warrior";

$enlace=mysqli_connect('localhost', 'id19746717_warriorroot', 's=<^z4m)_ow42Ye!', $nombrebada);
$ingresarproducto="INSERT INTO horarios ('foto_horario') VALUES ( '$imagen');";


$cargaproducto=mysqli_query($enlace, $ingresarproducto);

$cargaproducto;

header ("Location:http://warriorweb.infinityfreeapp.com/rutinas/abmrutinas.html");

$result_idgroup = mysqli_query($enlace, "SELECT id_horarios from horarios");
$idgroup = mysqli_fetch_row($result_idgroup);
if ($idgroup == 1)
{
        $result = mysqli_query($enlace, "SELECT foto_horarios FROM horarios");
        
        while ($row = mysqli_fetch_row($result)){
               echo "$foto_horarios";
}

}
        ?>
