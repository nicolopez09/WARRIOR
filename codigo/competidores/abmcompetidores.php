<?php 

$foto= $_POST['foto'];
$nombre= $_POST['nombre'];
$altura= $_POST['altura'];
$alcance= $_POST['alcance'];
$peleas= $_POST['peleas'];
$ganadas= $_POST['ganadas'];
$perdidas= $_POST['perdidas'];
$empatadas= $_POST['empatadas'];
$sin_resultado= $_POST['sin_resultado'];
$nombrebada='id19746717_warriorwebdb';

$enlace=mysqli_connect('localhost', 'id19746717_warriorroot', 's=<^z4m)_ow42Ye!', $nombrebada);
$ingresarproducto='INSERT INTO competidores (foto, nombre, altura, alcance, peleas, ganadas, perdidas, empatadas, sin_resultado)VALUES ('$foto','$nombre','$altura','$alcance','$peleas','$ganadas','$perdidas','$empatadas','$sin_resultado');';


$cargaproducto=mysqli_query($enlace, $ingresarproducto);

$cargaproducto;

header ("Location:https://warriorbootcampweb.000webhostapp.com/competidores/abmcompetidores.html");


$result_idgroup = mysqli_query($enlace, "SELECT nombre from competidores");
$idgroup = mysqli_fetch_row($result_idgroup);
if ($result_idgroup == 1){

                $result = mysqli_query($enlace, "SELECT * FROM competidores");
                
                while ($row = mysqli_fetch_row($result)){
                       echo "<tr><td>$id_competidor[0]</td><td>$foto [1]</td><td>$altura[2]</td><td>$alcance[3]</td><td>$peleas[4]</td><td>$ganadas[5]</td><td>$perdidas[6]</td><td>$empatadas[7]</td><td>$sin_resultado[8]</td></tr>";
                }
        }
        echo "</table> \n";
        echo "</div>";
        echo "</div>";
        ?>
