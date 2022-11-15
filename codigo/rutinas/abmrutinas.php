<?php 

$producto= $_POST['producto'];

$link= $_POST['link'];


$nombrebada='id19746717_warriorwebdb';

$enlace=mysqli_connect('localhost', 'id19746717_warriorroot', 's=<^z4m)_ow42Ye!', $nombrebada);
$ingresarproducto='INSERT INTO rutinas (link, producto)VALUES ('$link','$producto');';


$cargaproducto=mysqli_query($enlace, $ingresarproducto);

$cargaproducto;

header ("Location:https://warriorbootcampweb.000webhostapp.com/rutinas/abmrutinas.html");


$result_idgroup = mysqli_query($enlace, "SELECT producto from rutinas");
$idgroup = mysqli_fetch_row($result_idgroup);
if ($result_idgroup == 1){

                $result = mysqli_query($enlace, "SELECT * FROM rutinas");
                
                while ($row = mysqli_fetch_row($result)){
                       echo "<tr><td>$id_rutina[0]</td><td>$producto[1]</td><td>$link[2]</td></tr>";
                }
        }
        echo "</table> \n";
        echo "</div>";
        echo "</div>";
        ?>
