<?php

$imagen= $_POST['foto'];
$nombreBADA = "id19615577_warrior";

$enlace=mysqli_connect('localhost', 'id19746717_warriorroot', 's=<^z4m)_ow42Ye!', $nombrebada);
$ingresarproducto="INSERT INTO cuotas ('foto_cuotas') VALUES ( '$imagen');";


$cargaproducto=mysqli_query($enlace, $ingresarproducto);

$cargaproducto;

header ("Location:https://warriorbootcampweb.000webhostapp.com/rutinas/abmrutinas.html");

$result_idgroup = mysqli_query($enlace, "SELECT id_cuotas from cuotas");
$idgroup = mysqli_fetch_row($result_idgroup);
if ($idgroup == 1)
{
        $result = mysqli_query($enlace, "SELECT foto_cuotas FROM cuotas");
        
        while ($row = mysqli_fetch_row($result)){
               echo "$foto_cuotas";
}

}
        ?>
