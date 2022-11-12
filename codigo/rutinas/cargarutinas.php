<?php
$nombrebada='id19746717_warriorwebdb';
$enlace=mysqli_connect('localhost', 'id19746717_warriorroot', 's=<^z4m)_ow42Ye!', $nombrebada);

$result_idgroup = mysqli_query($enlace, "SELECT id_rutina from rutinas");
$idgroup = mysqli_fetch_row($result_idgroup);
if ($idgroup > 0){
        $result = mysqli_query($enlace, "SELECT link, producto FROM rutinas ");
        
        while ($row = mysqli_fetch_row($result)){
               echo "<tr><td>$producto1[0]</td></tr><tr><td>$link1[1]</td></tr>";
        }
       
        echo "</table> \n";
        echo "</div>";
        echo "</div>";
}
?>