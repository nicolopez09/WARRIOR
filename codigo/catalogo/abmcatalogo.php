<?php 

$producto= $_POST['producto'];

$precio= $_POST['precio'];

$imagen= $_POST['imagen'];

$nombrebada='id19746717_warriorwebdb';

$enlace=mysqli_connect('localhost', 'id19746717_warriorroot', 's=<^z4m)_ow42Ye!', $nombrebada);
$ingresarproducto='INSERT INTO catalogo (producto, precio, imagen)VALUES ("$producto","$precio","$imagen");';


$cargaproducto=mysqli_query($enlace, $ingresarproducto);

$cargaproducto;

header ("Location:http://warriorweb.infinityfreeapp.com/catalogo/abmcatalogo.html");


$result_idgroup = mysqli_query($enlace, "SELECT nombre from catalogo");
$idgroup = mysqli_fetch_row($result_idgroup);
if ($result_idgroup == 1){

                $result = mysqli_query($enlace, "SELECT * FROM catalogo");
                
                while ($row = mysqli_fetch_row($result)){
                       echo "<tr><td>$id_producto[0]</td><td>$producto [1]</td><td>$precio[2]</td><td>$imagen[3]</td></tr>";
                }
        }
        echo "</table> \n";
        echo "</div>";
        echo "</div>";
        ?>
