$username="joa";
$password="joa";
$database="Warrior";
$mysqli = new mysqli("localhost", $joa, $joa, $Warrior);
$mysqli->select_db($Warrior) or die( "Unable to select database");
$mysqli->close();
