<?php
$nombrebada='id19746717_warriorwebdb';
$enlace=mysqli_connect('localhost', 'id19746717_warriorroot', 's=<^z4m)_ow42Ye!', $nombrebada);


$result_idgroup = mysqli_query($enlace, "SELECT id from Usuario");
$idgroup = mysqli_fetch_row($result_idgroup);
if ($result_idgroup == 1){
        $result = mysqli_query($enlace, "SELECT Nombre_Usuario FROM Usuario");
        
        while ($row = mysqli_fetch_row($result)){
               echo "<tr><td>$Nombre_Usuario[0]</td></tr>";
        }
       
        echo "</table> \n";
        echo "</div>";
        echo "</div>";
}
?>