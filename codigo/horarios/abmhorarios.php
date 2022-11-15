<?php 

$imagen= $_POST['foto'];


$nombrebada='id19746717_warriorwebdb';

$enlace=mysqli_connect('localhost', 'id19746717_warriorroot', 's=<^z4m)_ow42Ye!', $nombrebada);
$ingresar='INSERT INTO horarios (imagen) VALUES ('$imagen');';


$carga=mysqli_query($enlace, $ingresar);

$carga;

header ("Location:https://warriorbootcampweb.000webhostapp.com/horarios/abmrutinas.html");


        ?>
